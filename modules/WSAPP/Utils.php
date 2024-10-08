<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
require_once 'include/database/PearDatabase.php';
require_once 'include/utils/utils.php';

function wsapp_getHandler($appType) {
	$db = PearDatabase::getInstance();
	$result = $db->pquery('SELECT * FROM vtiger_wsapp_handlerdetails WHERE type=?', array($appType));

	$handlerResult = array();

	if ($db->num_rows($result)>0) {
		$handlerResult['handlerclass'] = $db->query_result($result, 0, 'handlerclass');
		$handlerResult['handlerpath'] = $db->query_result($result, 0, 'handlerpath');
	}
	return $handlerResult;
}

function wsapp_getApplicationName($key) {
	$db = PearDatabase::getInstance();

	$result = $db->pquery('SELECT name from vtiger_wsapp WHERE appkey=?', array($key));
	$name = false;
	if ($db->num_rows($result)) {
		$name = $db->query_result($result, 0, 'name');
	}
	return $name;
}

function wsapp_getRecordEntityNameIds($entityNames, $modules, $user) {
	if (empty($entityNames) || empty($modules)) {
		return array();
	}
	$entityMetaList = array();
	$db = PearDatabase::getInstance();
	$entityNames = (array)$entityNames;
	$modules = (array)$modules;
	$entityNameIds = array();
	foreach ($modules as $moduleName) {
		if (empty($entityMetaList[$moduleName])) {
			$handler = vtws_getModuleHandlerFromName($moduleName, $user);
			$meta = $handler->getMeta();
			$entityMetaList[$moduleName] = $meta;
		}
		$meta = $entityMetaList[$moduleName];
		$nameFieldsArray = explode(',', $meta->getNameFields());
		if (count($nameFieldsArray)>1) {
			$nameFields = 'concat('.implode(",' ',", $nameFieldsArray).')';
		} else {
			$nameFields = $nameFieldsArray[0];
		}
		$mod = CRMEntity::getInstance($moduleName);
		$query = 'SELECT '.$meta->getObectIndexColumn()." as id,$nameFields as entityname
			FROM ".$meta->getEntityBaseTable().' as moduleentity
			INNER JOIN '.$mod->crmentityTable." as crmentity
			WHERE $nameFields IN(".generateQuestionMarks($entityNames).') AND crmentity.deleted=0 AND crmentity.crmid = moduleentity.'.$meta->getObectIndexColumn();
		$result = $db->pquery($query, $entityNames);
		$num_rows = $db->num_rows($result);
		for ($i=0; $i<$num_rows; $i++) {
			$id = $db->query_result($result, $i, 'id');
			$entityName = $db->query_result($result, $i, 'entityname');
			$entityNameIds[decode_html($entityName)] = vtws_getWebserviceEntityId($moduleName, $id);
		}
	}
	return $entityNameIds;
}

/***
 * Converts default time zone to specifiedTimeZone
 */
function wsapp_convertDateTimeToTimeZone($dateTime, $toTimeZone) {
	global $default_timezone;
	$time_zone = $default_timezone;
	date_default_timezone_set($time_zone); // source
	$sourceDate = date('Y-m-d H:i:s');
	date_default_timezone_set($toTimeZone); // destination
	$destinationDate = date('Y-m-d H:i:s');
	$diff = (strtotime($destinationDate)-strtotime($sourceDate));
	$givenTimeInSec = strtotime($dateTime);
	$modifiedTimeSec = $givenTimeInSec+$diff;
	return date('Y-m-d H:i:s', $modifiedTimeSec);
}

function wsapp_checkIfRecordsAssignToUser($recordsIds, $userIds) {
	$assignedRecordIds = array();
	$recordsIds = (array)$recordsIds;
	if (count($recordsIds)<=0) {
		return $assignedRecordIds;
	}
	$userIds = (array)$userIds;
	$db = PearDatabase::getInstance();
	$query = 'SELECT crmid FROM vtiger_crmobject where crmid IN ('.generateQuestionMarks($recordsIds).') and smownerid in ('.generateQuestionMarks($userIds).')';
	$params = $recordsIds;
	foreach ($userIds as $userId) {
		$params[] = $userId;
	}
	$queryResult = $db->pquery($query, $params);
	$num_rows = $db->num_rows($queryResult);

	for ($i=0; $i<$num_rows; $i++) {
		$assignedRecordIds[] = $db->query_result($queryResult, $i, 'crmid');
	}
	return $assignedRecordIds;
}

function wsapp_getAppKey($appName) {
	$db = PearDatabase::getInstance();
	$result = $db->pquery('SELECT * FROM vtiger_wsapp WHERE name=?', array($appName));
	$appKey='';
	if ($db->num_rows($result)) {
		$appKey = $db->query_result($result, 0, 'appkey');
	}
	return $appKey;
}

function wsapp_getAppSyncType($appKey) {
	$db = PearDatabase::getInstance();
	$result = $db->pquery('SELECT type FROM vtiger_wsapp WHERE appkey=?', array($appKey));
	$syncType='';
	if ($db->num_rows($result)>0) {
		$syncType = $db->query_result($result, 0, 'type');
	}
	return $syncType;
}

function wsapp_RegisterHandler($type, $handlerClass, $handlerPath) {
	$db = PearDatabase::getInstance();
	$result = $db->pquery('SELECT 1 FROM vtiger_wsapp_handlerdetails where type=?', array($type));
	if ($db->num_rows($result)>0) {
		$saveQuery = 'UPDATE vtiger_wsapp_handlerdetails SET handlerclass=?,handlerpath=? WHERE type=?';
		$parameters = array($handlerClass,$handlerPath,$type);
	} else {
		$saveQuery = 'INSERT INTO vtiger_wsapp_handlerdetails VALUES(?,?,?)';
		$parameters = array($type,$handlerClass,$handlerPath);
	}
	$db->pquery($saveQuery, $parameters);
}

function wsapp_DeleteHandler($type) {
	$type = (array)$type;
	$db = PearDatabase::getInstance();
	$query = 'DELETE FROM vtiger_wsapp_handlerdetails WHERE type IN('.generateQuestionMarks($type).')';
	$db->pquery($query, $type);
}
?>
