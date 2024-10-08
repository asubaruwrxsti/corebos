{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
 ********************************************************************************/
-->*}
<table class="small" bgcolor="#ffffff" border="0" cellpadding="5" cellspacing="0" valign="top" height="500" width="100%">
	<tbody>
		<tr>
			<td colspan="4">
				<span class="genHeaderGray">{$MOD.LBL_SELECT_COLUMNS}</span><br>
				{$MOD.LBL_SELECT_COLUMNS_TO_GENERATE_REPORTS}
				<hr>
			</td>
		</tr>
		<tr id="aggfieldtablerow" style="display:none">
			<td colspan="2"><b>{$MOD.LBL_AGG_FIELD}</b></td>
			<td colspan="2">
				<select id="pivotfield" name="pivotfield" class="txtBox"></select>
			</td>
		</tr>
		<tr>
			<td colspan="2" height="26"><b>{$MOD.LBL_AVAILABLE_FIELDS}</b></td>
			<td colspan="2"><b>{$MOD.LBL_SELECTED_FIELDS}</b></td>
		</tr>
		<tr valign="top">
			<td style="padding-right: 5px;" align="right" width="40%">
				<select id="availList" size="16" multiple name="availList" class="txtBox">
				</select>
			</td>
			<td style="padding: 5px;" align="center" width="10%">
				<input name="add" value=" {$APP.LBL_ADD_ITEM} &gt " class="classBtn" type="button" onClick="addColumn()">
			</td>
			<input type="hidden" name="selectedColumnsString"/>
			<td style="padding-left: 5px;" align="left" width="40%">
				<select id="selectedColumns" size="16" name="selectedColumns" onchange="selectedColumnClick(this);" multiple class="txtBox">
				</select>
			</td>
			<td style="padding-left: 5px;" align="left" width="10%">
				<table border="0" cellpadding="0" cellspacing="0">
					<tbody>
						<tr>
							<td>
								<img src="themes/images/movecol_up.gif" onmouseover="this.src='themes/images/movecol_up.gif'" onmouseout="this.src='themes/images/movecol_up.gif'" onclick="moveUp()" onmousedown="this.src='themes/images/movecol_up.gif'" align="absmiddle" border="0">
							</td>
						</tr>
						<tr>
							<td>
								<img src="themes/images/movecol_down.gif" onmouseover="this.src='themes/images/movecol_down.gif'" onmouseout="this.src='themes/images/movecol_down.gif'" onclick="moveDown()" onmousedown="this.src='themes/images/movecol_down.gif'" align="absmiddle" border="0">
							</td>
						</tr>
						<tr>
							<td>
								<img src="themes/images/movecol_del.gif" onmouseover="this.src='themes/images/movecol_del.gif'" onmouseout="this.src='themes/images/movecol_del.gif'" onclick="delColumn()" onmousedown="this.src='themes/images/movecol_del.gif'" align="absmiddle" border="0">
							</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td align="center" colspan="4" height="60" class="step_error" id="step4_error" style="color:red;">&nbsp;</td>
		</tr>
		<tr><td colspan="4" height="215"></td></tr>
	</tbody>
</table>
