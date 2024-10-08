<?php
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/
require_once 'include/utils/utils.php';
require_once 'include/utils/UserInfoUtil.php';
global $mod_strings, $app_strings, $theme;
$theme_path='themes/'.$theme.'/';
$image_path=$theme_path.'images/';

$smarty = new vtigerCRM_Smarty;

$defSharingPermissionData = getDefaultSharingAction();
$access_privileges = array();
$row=1;
foreach ($defSharingPermissionData as $tab_id => $def_perr) {
	$entity_name = getTabname($tab_id);
	if ($tab_id == 6) {
		$cont_name = getTabname(4);
		$entity_name .= ' & '.$cont_name;
	}

	$entity_perr = getDefOrgShareActionName($def_perr);

	$access_privileges[] = $entity_name;
	$access_privileges[] = $entity_perr;
	if ($entity_perr != 'Private') {
		$access_privileges[] = $mod_strings['LBL_DESCRIPTION_'.$entity_perr] . getTranslatedString($entity_name, $entity_name);
	} else {
		$access_privileges[] = $mod_strings['LBL_USR_CANNOT_ACCESS'] . getTranslatedString($entity_name, $entity_name);
	}
	$row++;
}
$access_privileges=array_chunk($access_privileges, 3);
usort($access_privileges, function ($a, $b) {
	$moda=($a[0]=='Accounts & Contacts' ? 'Accounts' : $a[0]);
	$modb=($b[0]=='Accounts & Contacts' ? 'Accounts' : $b[0]);
	return (strtolower(getTranslatedString($moda, $moda)) < strtolower(getTranslatedString($modb, $modb))) ? -1 : 1;
});
$smarty->assign('DEFAULT_SHARING', $access_privileges);

$custom_access = array();
//Lead Sharing
$custom_access['Leads'] = getSharingRuleList('Leads');

//Account Sharing
$custom_access['Accounts'] = getSharingRuleList('Accounts');

//Potential Sharing
$custom_access['Potentials'] = getSharingRuleList('Potentials');

//HelpDesk Sharing
$custom_access['HelpDesk'] = getSharingRuleList('HelpDesk');

//Email Sharing
//$custom_access['Emails'] = getSharingRuleList('Emails');

//Campaign Sharing
$custom_access['Campaigns'] = getSharingRuleList('Campaigns');

//Quotes Sharing
$custom_access['Quotes'] = getSharingRuleList('Quotes');

//Purchase Order Sharing
$custom_access['PurchaseOrder'] = getSharingRuleList('PurchaseOrder');

//Sales Order Sharing
$custom_access['SalesOrder'] = getSharingRuleList('SalesOrder');

//Invoice Sharing
$custom_access['Invoice'] = getSharingRuleList('Invoice');

//Document Sharing
$custom_access['Documents'] = getSharingRuleList('Documents');

// Look up for modules for which sharing access is enabled.
// NOTE: Accounts and Contacts has been couple, so we need to elimiate Contacts also
$othermodules = getSharingModuleList(array('Contacts'));
if (!empty($othermodules)) {
	foreach ($othermodules as $moduleresname) {
		if (!isset($custom_access[$moduleresname])) {
			$sr4module = getSharingRuleList($moduleresname);
			if (isset($_REQUEST['sortrulesby'])) {
				usort($sr4module, function ($a, $b) {
					$sba = substr($a[$_REQUEST['sortrulesby']], strpos($a[$_REQUEST['sortrulesby']], '>'));
					$sbb = substr($b[$_REQUEST['sortrulesby']], strpos($b[$_REQUEST['sortrulesby']], '>'));
					return $sba < $sbb ? -1 : 1;
				});
			}
			$custom_access[$moduleresname] = $sr4module;
		}
	}
}
uksort($custom_access, function ($a, $b) {
	return (strtolower(getTranslatedString($a, $a)) < strtolower(getTranslatedString($b, $b))) ? -1 : 1;
});
$smarty->assign('MODSHARING', $custom_access);

/** returns the list of sharing rules for the specified module
 * @param string Module Name
 * @return array sharing rules list info
 */
function getSharingRuleList($module) {
	global $adb,$mod_strings;

	$tabid=getTabid($module);
	$dataShareTableArray=getDataShareTableandColumnArray();

	$i=1;
	$access_permission = array();
	foreach ($dataShareTableArray as $table_name => $colName) {
		$colNameArr=explode('::', $colName);
		$query = 'select '.$table_name.'.* from '.$table_name
			.' inner join vtiger_datashare_module_rel on '.$table_name.'.shareid=vtiger_datashare_module_rel.shareid where vtiger_datashare_module_rel.tabid=?';
		$result=$adb->pquery($query, array($tabid));
		$num_rows=$adb->num_rows($result);

		$share_colName=$colNameArr[0];
		$share_modType=getEntityTypeFromCol($share_colName);

		$to_colName=$colNameArr[1];
		$to_modType=getEntityTypeFromCol($to_colName);

		for ($j=0; $j<$num_rows; $j++) {
			$shareid=$adb->query_result($result, $j, 'shareid');
			$share_id=$adb->query_result($result, $j, $share_colName);
			$to_id=$adb->query_result($result, $j, $to_colName);
			$permission = $adb->query_result($result, $j, 'permission');

			$share_ent_disp = getEntityDisplayLink($share_modType, $share_id);
			$to_ent_disp = getEntityDisplayLink($to_modType, $to_id);

			if ($permission == 0) {
				$perr_out = $mod_strings['Read Only '];
			} elseif ($permission == 1) {
				$perr_out = $mod_strings['Read/Write'];
			}

			$access_permission[] = $shareid;
			$access_permission[] = $share_ent_disp;
			$access_permission[] = $to_ent_disp;
			$access_permission[] = $perr_out;

			$i++;
		}
	}
	if (is_array($access_permission)) {
		$access_permission = array_chunk($access_permission, 4);
	}
	return $access_permission;
}
$smarty->assign('THEME', $theme);
$smarty->assign('IMAGE_PATH', $image_path);
$smarty->assign('APP', $app_strings);
$smarty->assign('CMOD', $mod_strings);
$smarty->assign('MOD', return_module_language($current_language, 'Settings'));
$smarty->assign('MODULE', $currentModule);
$smarty->assign('SINGLE_MOD', getTranslatedString('SINGLE_'.$currentModule));

$smarty->display('OrgSharingDetailView.tpl');
?>
