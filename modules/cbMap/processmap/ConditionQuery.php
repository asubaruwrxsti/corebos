<?php
/*************************************************************************************************
 * Copyright 2016 JPL TSolucio, S.L. -- This file is a part of TSOLUCIO coreBOS Customizations.
 * Licensed under the vtiger CRM Public License Version 1.1 (the "License"); you may not use this
 * file except in compliance with the License. You can redistribute it and/or modify it
 * under the terms of the License. JPL TSolucio, S.L. reserves all rights not expressly
 * granted by the License. coreBOS distributed by JPL TSolucio S.L. is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. Unless required by
 * applicable law or agreed to in writing, software distributed under the License is
 * distributed on an "AS IS" BASIS, WITHOUT ANY WARRANTIES OR CONDITIONS OF ANY KIND,
 * either express or implied. See the License for the specific language governing
 * permissions and limitations under the License. You may obtain a copy of the License
 * at <http://corebos.org/documentation/doku.php?id=en:devel:vpl11>
 *************************************************************************************************
 *  Module       : Business Mappings:: Condition Query
 *  Version      : 1.0
 *  Author       : JPL TSolucio, S. L.
 *************************************************************************************************
 * The accepted format is a direct SQL OR a QueryGenerator specification.
 * If it contains both, the SQL part will be used and the other ignored
 * You MUST specify the return value which can be:
 *  - a field from the query, the value of the first row found will be returned
 *  - the string COUNT which will return the number of rows of the query
 *  - the string RECORDSET which will return all the results. Be careful!!
 * In QueryGenerator:
 *  - you can specify the fields to be returned in the SQL by a comma separated string of field names
 *     if no fields are specified the ID of the records will be used
 *  - the conditions are a json encoded string as generated by the conditions editor of the application
 * Examples:
<map>
<sql>
SELECT accountid,accountname
FROM vtiger_account
INNER JOIN vtiger_crmentity ce ON ce.crmid=vtiger_account.accountid
WHERE ce.deleted=0 AND vtiger_account.accountid =?
</sql>
<return>accountname</return>    {count|recordset}
</map>

<map>
<module>Assets</module>
<fields>assetname,asset_no,productname</fields>
<conditions>[{"fieldname":"assetname","operation":"contains","value":"j","valuetype":"rawtext","joincondition":"and","groupid":"0"},{"fieldname":"product : (Products) unit_price","operation":"greater than","value":"30","valuetype":"rawtext","joincondition":"and","groupid":"0"}]</conditions>
<return>recordset</return>
</map>

 *************************************************************************************************/
require_once 'include/events/SqlResultIterator.inc';
require_once 'modules/com_vtiger_workflow/VTWorkflowManager.inc';
require_once 'modules/com_vtiger_workflow/VTSimpleTemplate.inc';
require_once 'modules/com_vtiger_workflow/VTEntityCache.inc';
require_once 'modules/com_vtiger_workflow/VTWorkflowUtils.php';
require_once 'modules/com_vtiger_workflow/include.inc';
require_once 'modules/com_vtiger_workflow/WorkFlowScheduler.php';

class ConditionQuery extends processcbMap {

	public function processMap($arguments) {
		$xml = $this->getXMLContent();
		if (isset($xml->sql)) {
			return $this->processSQL($xml, $arguments);
		} elseif (isset($xml->conditions)) {
			return $this->processQuery($xml, $arguments);
		} else {
			return false;
		}
	}

	private function executeSQL($sql, $arguments, $return) {
		global $adb;
		$sql = $adb->convert2Sql($sql, $arguments);
		$rs = $adb->query($sql);
		if ($rs) {
			if (strtolower($return)=='count') {
				return $adb->num_rows($rs);
			}
			if (strtolower($return)=='recordset') {
				$recordset = array();
				while ($row=$adb->fetchByAssoc($rs)) {
					$recordset[] = $row;
				}
				return $recordset;
			}
			$f = $adb->fetch_array($rs);
			if (isset($f[$return])) {
				return $f[$return];
			}
		}
		return false;
	}

	private function processSQL($xml, $arguments) {
		return $this->executeSQL((string)$xml->sql, $arguments, (string)$xml->return);
	}

	private function processQuery($xml, $arguments) {
		$query = $this->getExpressionQuery($xml);
		return $this->executeSQL($query, array(), (string)$xml->return);
	}

	public function getExpressionQuery($xml) {
		global $adb,$current_user;
		$workflowScheduler = new WorkFlowScheduler($adb);
		$moduleName = (string)$xml->module;
		$queryGenerator = new QueryGenerator($moduleName, $current_user);
		$conditions = (string)$xml->conditions;
		$conditions = json_decode(decode_html($conditions));
		if (isset($xml->fields)) {
			$fields = explode(',', trim((string)$xml->fields));
			$queryGenerator->setFields($fields);
		} else {
			$queryGenerator->setFields(array('id'));
		}
		$workflowScheduler->addWorkflowConditionsToQueryGenerator($queryGenerator, $conditions);
		return $queryGenerator->getQuery();
	}
}
?>