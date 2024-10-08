<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
require_once 'Smarty_setup.php';
require_once 'modules/Users/Users.php';
require_once 'include/utils/utils.php';

$module = vtlib_purify($_REQUEST['module']);
$focus = CRMEntity::getInstance($module);

global $mod_strings, $app_strings, $current_language, $currentModule, $theme, $adb;

$theme_path='themes/'.$theme.'/';
$image_path=$theme_path.'images/';

$mode = vtlib_purify($_REQUEST['mergemode']);

if ($mode == 'mergesave') {
	$return_module = vtlib_purify($_REQUEST['return_module']);
	$return_action = vtlib_purify($_REQUEST['return_action']);
	$merge_id = vtlib_purify($_REQUEST['record']);
	$recordids = vtlib_purify($_REQUEST['pass_rec']);
	// Here we check if user have the rights to see this data.
	if (isPermitted($currentModule, 'EditView', $merge_id) !== 'yes') {
		$smarty = new vtigerCRM_Smarty();
		$smarty->assign('APP', $app_strings);
		$smarty->assign('OPERATION_MESSAGE', getTranslatedString('LBL_PERMISSION'));
		$smarty->display('modules/Vtiger/OperationNotPermitted.tpl');
		exit;
	}

	$result = $adb->pquery('SELECT count(*) AS count FROM vtiger_crmobject WHERE crmid=? and deleted=0', array($merge_id));
	$count = $adb->query_result($result, 0, 'count');

	if ($count > 0) {
		// First, save the primary record
		$focus->mode='edit';
		$focus->id = $merge_id;
		setObjectValuesFromRequest($focus);
		$focus->save($module);
		$rec_values=$focus->column_fields;

		// Remove the id of primary record from the list of records to be deleted.
		$del_value=explode(',', $recordids, -1);
		$offset = array_search($merge_id, $del_value);
		unset($del_value[$offset]);

		// Transfer the related lists of the records to be deleted, to the primary record's related list
		if (method_exists($focus, 'transferRelatedRecords')) {
			$focus->transferRelatedRecords($module, $del_value, $merge_id);
		}

		// Delete the records by id specified in the list
		foreach ($del_value as $value) {
			if (isPermitted($module, 'Delete', $value) === 'yes') {
				DeleteEntity($module, $return_module, $focus, $value, '');
			}
		}
	}
	echo '<script>window.opener.location.href=window.opener.location.href;window.self.close();</script>';
} elseif ($mode == 'mergefields') {
	$idstring = vtlib_purify($_REQUEST['passurl']);

	$exploded_id=explode(',', $idstring, -1);
	$record_count = count($exploded_id);

	$smarty = new vtigerCRM_Smarty;
	$smarty->assign('EDIT_DUPLICATE', '');
	if ($record_count == 2) {
		if (isPermitted($currentModule, 'EditView', $exploded_id[0]) == 'yes' && isPermitted($currentModule, 'EditView', $exploded_id[1]) == 'yes'
			&& isPermitted($currentModule, 'Delete', $exploded_id[0]) == 'yes' && isPermitted($currentModule, 'Delete', $exploded_id[1]) == 'yes'
		) {
			$smarty->assign('EDIT_DUPLICATE', 'permitted');
		}
	} else {
		if (isPermitted($currentModule, 'EditView', $exploded_id[0]) == 'yes' && isPermitted($currentModule, 'EditView', $exploded_id[1]) == 'yes'
			&& isPermitted($currentModule, 'EditView', $exploded_id[2]) == 'yes' && isPermitted($currentModule, 'Delete', $exploded_id[0]) == 'yes'
			&& isPermitted($currentModule, 'Delete', $exploded_id[1]) == 'yes' && isPermitted($currentModule, 'Delete', $exploded_id[2]) == 'yes'
		) {
			$smarty->assign('EDIT_DUPLICATE', 'permitted');
		}
	}

	$all_values_array= getRecordValues($exploded_id, $module);
	$all_values = $all_values_array[0];
	$js_arr_val = $all_values_array[1];
	$fld_array = $all_values_array[2];
	$js_arr = implode(',', $js_arr_val);

	$imported_records = array();
	$sql = 'select bean_id from vtiger_users_last_import where bean_type=? and deleted=0';
	$result = $adb->pquery($sql, array($module));
	$num_rows = $adb->num_rows($result);
	$count = 0;
	for ($i=0; $i<$num_rows; $i++) {
		foreach ($exploded_id as $value) {
			if ($value == $adb->query_result($result, $i, 'bean_id')) {
				$count++;
			}
		}
		$imported_records[] = $adb->query_result($result, $i, 'bean_id');
	}

	$no_existing = ($record_count == $count ? 1 : 0);

	$companyDetails = retrieveCompanyDetails();
	$favicon = $companyDetails['favicon'];
	$smarty->assign('FAVICON', $favicon);
	$userName = getFullNameFromArray('Users', $current_user->column_fields);
	$smarty->assign('USER', $userName);
	$smarty->assign('coreBOS_app_name', GlobalVariable::getVariable('Application_UI_Name', 'coreBOS'));

	// Pass on the authenticated user language
	global $current_language;
	$smarty->assign('LANGUAGE', $current_language);
	$smarty->assign('MOD', $mod_strings);
	$smarty->assign('APP', $app_strings);
	$smarty->assign('RECORD_COUNT', $record_count);
	$smarty->assign('THEME', $theme);
	$smarty->assign('IMAGE_PATH', $image_path);
	$smarty->assign('MODULENAME', $module);
	$smarty->assign('JS_ARRAY', $js_arr);
	$smarty->assign('ID_ARRAY', $exploded_id);
	$smarty->assign('IDSTRING', $idstring);
	$smarty->assign('ALLVALUES', $all_values);
	$smarty->assign('FIELD_ARRAY', $fld_array);
	$smarty->assign('IMPORTED_RECORDS', $imported_records);
	$smarty->assign('NO_EXISTING', $no_existing);
	$smarty->display('MergeFields.tpl');
}
?>
