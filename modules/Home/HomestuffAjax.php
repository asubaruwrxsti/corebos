<?php
/*+********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/
global $adb, $current_user, $mod_strings, $currentModule, $current_language, $app_strings;
$userprivs = $current_user->getPrivileges();

$modval = isset($_REQUEST['modname']) ? trim(vtlib_purify($_REQUEST['modname'])) : '';
$dash   = isset($_REQUEST['dash']) ? trim(vtlib_purify($_REQUEST['dash'])) : '';
$home   = isset($_REQUEST['home']) ? trim(vtlib_purify($_REQUEST['home'])) : '';

if (!empty($modval)) {
	$tabid = getTabId($modval);
	$ssql = 'select vtiger_customview.*, vtiger_users.user_name from vtiger_customview inner join vtiger_tab on vtiger_tab.name = vtiger_customview.entitytype
			left join vtiger_users on vtiger_customview.userid = vtiger_users.id where vtiger_tab.tabid=?';
	$sparams = array($tabid);

	if (!is_admin($current_user)) {
		$ssql .= " and (vtiger_customview.status=0 or vtiger_customview.userid=? or vtiger_customview.status=3 or vtiger_customview.userid in
			(select vtiger_user2role.userid
			from vtiger_user2role
			inner join vtiger_role on vtiger_role.roleid=vtiger_user2role.roleid
			where vtiger_role.parentrole like '".$userprivs->getParentRoleSequence()."::%'))";
		$sparams[] = $current_user->id;
	}
	$result = $adb->pquery($ssql, $sparams);

	if ($adb->num_rows($result)==0) {
		echo $mod_strings['MSG_NO_FILTERS'];
		die;
	} else {
		$html = '<select id=selFilterid name=selFiltername onchange=setPrimaryFld(this) class="detailedViewTextBox" onfocus="this.className=\'detailedViewTextBoxOn\'" ';
		$html.= ' onblur="this.className=\'detailedViewTextBox\'" style="width:60%">';
		for ($i=0; $i<$adb->num_rows($result); $i++) {
			if ($adb->query_result($result, $i, 'viewname')=='All') {
				$html .= "<option value='".$adb->query_result($result, $i, 'cvid')."'>".getTranslatedString('COMBO_ALL', $currentModule).'</option>';
			} elseif ($adb->query_result($result, $i, 'userid')==$current_user->id) {
				$html .= "<option value='".$adb->query_result($result, $i, 'cvid')."'>".$adb->query_result($result, $i, 'viewname').'</option>';
			} else {
				$html .= "<option value='".$adb->query_result($result, $i, 'cvid')."'>".$adb->query_result($result, $i, 'viewname')
					.'['.$adb->query_result($result, $i, 'user_name').']</option>';
			}
		}
		$html .= '</select>';
	}
	echo $html;
}

if (!empty($dash)) {
	$dashbd_strings = return_module_language($current_language, 'Dashboard');
	$graph_array = array(
		'leadsource' => $dashbd_strings['leadsource'],
		'leadstatus' => $dashbd_strings['leadstatus'],
		'leadindustry' => $dashbd_strings['leadindustry'],
		'salesbyleadsource' => $dashbd_strings['salesbyleadsource'],
		'salesbyaccount' => $dashbd_strings['salesbyaccount'],
		'salesbyuser' => $dashbd_strings['salesbyuser'],
		'salesbyteam' => $dashbd_strings['salesbyteam'],
		'accountindustry' => $dashbd_strings['accountindustry'],
		'productcategory' => $dashbd_strings['productcategory'],
		'productbyqtyinstock' => $dashbd_strings['productbyqtyinstock'],
		'productbypo' => $dashbd_strings['productbypo'],
		'productbyquotes' => $dashbd_strings['productbyquotes'],
		'productbyinvoice' => $dashbd_strings['productbyinvoice'],
		'sobyaccounts' => $dashbd_strings['sobyaccounts'],
		'sobystatus' => $dashbd_strings['sobystatus'],
		'pobystatus' => $dashbd_strings['pobystatus'],
		'quotesbyaccounts' => $dashbd_strings['quotesbyaccounts'],
		'quotesbystage' => $dashbd_strings['quotesbystage'],
		'invoicebyacnts' => $dashbd_strings['invoicebyacnts'],
		'invoicebystatus' => $dashbd_strings['invoicebystatus'],
		'ticketsbystatus' => $dashbd_strings['ticketsbystatus'],
		'ticketsbypriority' => $dashbd_strings['ticketsbypriority'],
		'ticketsbycategory' => $dashbd_strings['ticketsbycategory'],
		'ticketsbyuser' => $dashbd_strings['ticketsbyuser'],
		'ticketsbyteam' => $dashbd_strings['ticketsbyteam'],
		'ticketsbyproduct'=> $dashbd_strings['ticketsbyproduct'],
		'contactbycampaign'=> $dashbd_strings['contactbycampaign'],
		'ticketsbyaccount'=> $dashbd_strings['ticketsbyaccount'],
		'ticketsbycontact'=> $dashbd_strings['ticketsbycontact'],
	);

	$html  = '<select name=seldashbd id=seldashbd_id class="detailedViewTextBox" onfocus="this.className=\'detailedViewTextBoxOn\'" ';
	$html .= ' onblur="this.className=\'detailedViewTextBox\'" style="width:60%">';
	foreach ($graph_array as $key => $value) {
		$html .='<option value="'.$key.'">'.$value.'</option>';
	}
	$html .= '</select>';
	echo $html;
}

if (!empty($_REQUEST['primecvid'])) {
	$cvid=$_REQUEST['primecvid'];
	$fieldmodule = vtlib_purify($_REQUEST['fieldmodname']);
	$result=$adb->pquery("select cvid,columnname from vtiger_cvcolumnlist where columnname not like '%::%' and cvid=?", array($cvid));
	if ($adb->num_rows($result)==0) {
		echo $mod_strings['MSG_NO_FIELDS'];
		die;
	} else {
		$html = '<select id=selPrimeFldid name=PrimeFld multiple class="detailedViewTextBox" onfocus="this.className=\'detailedViewTextBoxOn\'"';
		$html.= ' onblur="this.className=\'detailedViewTextBox\'" style="width:60%">';
		for ($i=0; $i<$adb->num_rows($result); $i++) {
			$columnname=$adb->query_result($result, $i, 'columnname');
			if ($columnname != '') {
				$prifldarr=explode(':', $columnname);
				$fieldname = $prifldarr[2];
				$priarr=explode('_', $prifldarr[3], 2); //getting field label
				$prifld = str_replace('_', ' ', $priarr[1]);
				if (!is_admin($current_user)) {
					$fld_permission = getFieldVisibilityPermission($fieldmodule, $current_user->id, $fieldname);
				} else {
					$fld_permission = '0';
				}
				if ($fld_permission == 0) {
					$field_query = $adb->pquery(
						'SELECT fieldlabel FROM vtiger_field WHERE fieldname = ? AND tablename = ? and vtiger_field.presence in (0,2)',
						array($fieldname, $prifldarr[0])
					);
					$field_label = $adb->query_result($field_query, 0, 'fieldlabel');
					if (trim($field_label) != '') {
						$html .= "<option value='".$columnname."'>".getTranslatedString($field_label, $fieldmodule).'</option>';
					}
				}
			}
		}
		$html .= '</select>';
	}
	echo $html;
}

if (!empty($_REQUEST['showmaxval']) && !empty($_REQUEST['sid'])) {
	$sid = vtlib_purify($_REQUEST['sid']);
	$maxval=$_REQUEST['showmaxval'];
	$query='select stufftype from vtiger_homestuff where stuffid=?';
	$res=$adb->pquery($query, array($sid));
	$stufftypename=$adb->query_result($res, 0, 'stufftype');
	if ($stufftypename=='Module') {
		$result=$adb->pquery('update vtiger_homemodule set maxentries=? where stuffid=?', array($maxval, $sid));
	} elseif ($stufftypename=='RSS') {
		$result=$adb->pquery('update vtiger_homerss set maxentries=? where stuffid=?', array($maxval, $sid));
	} elseif ($stufftypename=='Default') {
		$result=$adb->pquery('update vtiger_homedefault set maxentries=? where stuffid=?', array($maxval, $sid));
	}
	echo 'loadStuff('.$sid.",'".$stufftypename."')";
}

if (!empty($_REQUEST['dashVal'])) {
	$did = urlencode(vtlib_purify($_REQUEST['did']));
	$res=$adb->pquery('update vtiger_homedashbd set dashbdtype=? where stuffid=?', array($_REQUEST['dashVal'], $did));
	echo 'loadStuff('.$did.",'DashBoard')";
}

if (!empty($_REQUEST['reportVal'])) {
	$stuffid = urlencode(vtlib_purify($_REQUEST['stuffid']));
	$res=$adb->pquery('update vtiger_homereportchart set reportcharttype=? where stuffid=?', array($_REQUEST['reportVal'], $stuffid));
	echo 'loadStuff('.$stuffid.",'ReportCharts')";
}

if (!empty($_REQUEST['homestuffid'])) {
	$sid=vtlib_purify($_REQUEST['homestuffid']);
	$rs = $adb->pquery('select stufftype from vtiger_homestuff where stuffid=?', array($sid));
	$res=$adb->query_result($rs, 0, 'stufftype');
	if ($res=='CustomWidget') {
		$adb->pquery('delete from vtiger_home_cw_fields where stuffid=?', array($sid));
		$adb->pquery('delete from vtiger_home_customwidget where stuffid=?', array($sid));
	}
	$adb->pquery('delete from vtiger_homestuff where stuffid=?', array($sid));
	echo 'SUCCESS';
}

//Sequencing of blocks starts
if (!empty($_REQUEST['matrixsequence'])) {
	$sequence = explode('_', $_REQUEST['matrixsequence']);
	for ($i=count($sequence)-1, $seq=0; $i>=0; $i--, $seq++) {
		$result = $adb->pquery('update vtiger_homestuff set stuffsequence=? where stuffid=?', array($seq, $sequence[$i]));
	}
	echo "<table cellpadding='100' cellspacing='0' border='0' width='100%' class='vtResultPop'>
		<tr><td align='center' style='font-size:14;font-weight:bold;'>".getTranslatedString('Layout Saved', 'Home').'</td></tr>
		</table>';
}
//Sequencing of blocks ends

if (isset($_REQUEST['act']) && $_REQUEST['act'] =='hide') {
	$stuffid=$_REQUEST['stuffid'];
	$res=$adb->pquery('update vtiger_homestuff set visible=1 where stuffid=?', array($stuffid));
	echo 'SUCCESS';
}

//saving layout here
if (!empty($_REQUEST['layout'])) {
	$result = $adb->pquery('delete from vtiger_home_layout where userid=?', array($current_user->id));
	$result = $adb->pquery('insert into vtiger_home_layout values (?, ?)', array($current_user->id, $_REQUEST['layout']));
	if (!$result) {
		echo 'SUCCESS';
	}
}

if (!empty($home)) {
	$UMOD = $mod_strings;
	$focus = new Users();
	$homeWidgets = $focus->getHomeStuffOrder($current_user->id);
	if (!in_array('', $homeWidgets)) {
		$errorMsg='LBL_NO_WIDGETS_HIDDEN';
	}
	$html='<table border="0" cellpadding="5" cellspacing="0" ><tr>';
	$COUNT = 0;
	foreach ($homeWidgets as $key => $value) {
		if ($value == '') {
			$html .= '<td class="dvtCellInfo" align="center" >
			<input type="checkbox" name="names" value="'.$key.'"></td>
			<td class="dvtCellLabel" align="left">'.getTranslatedString($key, 'Users').'</td>';
			$COUNT++;
			if (($COUNT % 2) == 0) {
				$html .= '</tr><tr>';
			}
		}
	}
	if (!empty($errorMsg)) {
		$html .= '<td align="center">'.getTranslatedString($errorMsg, 'Home').'</td>';
	}
	$html .= '</tr></table>';
	echo $html;
}
?>
