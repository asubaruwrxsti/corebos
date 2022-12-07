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
<script type="text/javascript" src="include/js/dtlviewajax.js"></script>
{if $FIELD_DEPENDENCY_DATASOURCE neq ''}
<script type="text/javascript" src="include/js/FieldDependencies.js"></script>
<script type="text/javascript" src="include/js/FieldDepFunc.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {ldelim} (new FieldDependencies({$FIELD_DEPENDENCY_DATASOURCE})).init(document.forms['DetailView']) {rdelim});
</script>
{/if}
<script type="text/javascript" src="include/js/clipboard.min.js"></script>
<span id="crmspanid" style="display:none;position:absolute;" onmouseover="show('crmspanid');">
<a class="link" id="clipcopylink" href="javascript:;" onclick="handleCopyClipboard(event);" data-clipboard-text="">{$APP.LBL_COPY_BUTTON}</a>
</span>
<div id="convertleaddiv" style="display:block;position:absolute;left:225px;top:150px;"></div>
<script>
{literal}
var clipcopyobject = new ClipboardJS('#clipcopylink');
clipcopyobject.on('success', function(e) { clipcopyclicked = false; });
clipcopyobject.on('error', function(e) { clipcopyclicked = false; });
{/literal}
</script>
<script>
{if isset($PopupFilterMapResults)}
let PopupFilterMapResults = JSON.parse(`{$PopupFilterMapResults}`);
{/if}
</script>

<div id="lstRecordLayout" class="layerPopup" style="display:none;width:325px;height:300px;"></div>

{if $MODULE eq 'Accounts' || $MODULE eq 'Contacts'}
{if $MODULE eq 'Accounts'}
{assign var=address1 value=$MOD.LBL_BILLING_ADDRESS}
{assign var=address2 value=$MOD.LBL_SHIPPING_ADDRESS}
{/if}
{if $MODULE eq 'Contacts'}
{assign var=address1 value=$MOD.LBL_PRIMARY_ADDRESS}
{assign var=address2 value=$MOD.LBL_ALTERNATE_ADDRESS}
{/if}
<div class="slds-card" id="locateMap" onMouseOut="fninvsh('locateMap')" onMouseOver="fnvshNrm('locateMap')">
<div class="slds-card__body slds-card__body_inner">
<a href="javascript:;" onClick="fninvsh('locateMap'); searchMapLocation('Main');" class="calMnu">{$address1}</a>
</div>
<div class="slds-card__body slds-card__body_inner">
<a href="javascript:;" onClick="fninvsh('locateMap'); searchMapLocation('Other');" class="calMnu">{$address2}</a>
</div>
</div>
{/if}

<table width="100%" cellpadding="2" cellspacing="0" border="0" class="detailview_wrapper_table">
<tr>
<td class="detailview_wrapper_cell">

{include file='Buttons_List.tpl' isDetailView=true}

<!-- Contents -->
<table class="slds-m-around_medium" style="width: 98%;">
<tr>
<td class="showPanelBg" valign=top width=100%>
<!-- PUBLIC CONTENTS STARTS-->
<div class="small" style="padding:14px" onclick="hndCancelOutsideClick();";>
{include file='applicationmessage.tpl'}
{include file='DetailViewWidgetBar.tpl'}
<!-- Entity and More information tabs -->
<table border=0 cellspacing=0 cellpadding=0 width=95% align=center>
<tr>
<td>
<div class="small detailview_utils_table_top">
<div class="detailview_utils_table_tabs noprint">
<div class="detailview_utils_table_tab detailview_utils_table_tab_selected detailview_utils_table_tab_selected_top">{$SINGLE_MOD|@getTranslatedString:$MODULE} {$APP.LBL_INFORMATION}</div>
{if $SinglePane_View eq 'false' && $IS_REL_LIST neq false && $IS_REL_LIST|@count > 0 && empty($Module_Popup_Edit)}
{if $HASRELATEDPANES eq 'true'}
	{include file='RelatedPanes.tpl' tabposition='top' RETURN_RELATEDPANE=''}
{else}
<div class="detailview_utils_table_tab detailview_utils_table_tab_unselected detailview_utils_table_tab_unselected_top" onmouseout="fnHideDrop('More_Information_Modules_List');" onmouseover="fnDropDown(this,'More_Information_Modules_List');">
	<a href="index.php?action=CallRelatedList&module={$MODULE}&record={$ID}">{$APP.LBL_MORE} {$APP.LBL_INFORMATION}</a>
	<div onmouseover="fnShowDrop('More_Information_Modules_List')" onmouseout="fnHideDrop('More_Information_Modules_List')"
		 id="More_Information_Modules_List" class="drop_mnu" style="left: 502px; top: 76px; display: none;">
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			{foreach key=_RELATION_ID item=_RELATED_MODULE from=$IS_REL_LIST}
				<tr><td><a class="drop_down" href="index.php?action=CallRelatedList&module={$MODULE}&record={$ID}&selected_header={$_RELATED_MODULE}&relation_id={$_RELATION_ID}#tbl_{$MODULE}_{$_RELATED_MODULE}">{$_RELATED_MODULE|@getTranslatedString:$_RELATED_MODULE}</a></td></tr>
			{/foreach}
		</table>
	</div>
</div>
{/if}
{/if}
</div>
<div class="detailview_utils_table_tabactionsep detailview_utils_table_tabactionsep_top" id="detailview_utils_table_tabactionsep_top"></div>
<div class="detailview_utils_table_actions detailview_utils_table_actions_top" id="detailview_utils_actions_top">
<div class="slds-button-group" role="group">
	
{if empty($Module_Popup_Edit)}
<div class="slds-button-group" role="group">
	{include file='Components/DetailViewPirvNext.tpl'}
</div>
{/if}
</div>
</div>
</td>
</tr>
<tr>
<td valign=top align=left >
<table border=0 cellspacing=0 cellpadding=3 width=100% class="" style="border-bottom:0;">
<tr valign=top>

<td align=left>
<!-- Command Buttons -->
<table border=0 cellspacing=0 cellpadding=0 width=100%>
	<tr valign=top>
		<td style="padding:5px">
			<form action="index.php" method="post" name="DetailView" id="formDetailView">
			<input type="hidden" id="hdtxt_IsAdmin" value="{if isset($hdtxt_IsAdmin)}{$hdtxt_IsAdmin}{else}0{/if}">
			{include file='DetailViewHidden.tpl'}
			{foreach item=details key=idx from=$BLOCKS}
				{if $details.__type == 'block'}
					{assign var=header value=$details.__header}
					{assign var=detail value=$details.__fields}
					{include file='Components/DetailViewBlocks.tpl'}
				{else if $details.__type == 'widget'}
					{assign var=CUSTOM_LINK_DETAILVIEWWIDGET value=$details.__fields}
					{process_widget widgetLinkInfo=$CUSTOM_LINK_DETAILVIEWWIDGET}
				{/if}
			{/foreach}
			<table border=0 cellspacing=0 cellpadding=0 width=100%>
					<!-- Inventory - Product Details informations -->
					{if isset($ASSOCIATED_PRODUCTS) && $ShowInventoryLines}
					<tr><td>
						{$ASSOCIATED_PRODUCTS}
					</td></tr>
					{/if}
				{if $SinglePane_View eq 'true' && $IS_REL_LIST neq false && $IS_REL_LIST|@count > 0}
					{include file= 'RelatedListNew.tpl'}
				{/if}
			</table>
		</td>
	</tr>
</table>
</td>
{if empty($Module_Popup_Edit)}
<td width=22% valign=top style="padding:13px;{$DEFAULT_ACTION_PANEL_STATUS}" class="noprint" id="actioncolumn">
<!-- right side relevant info -->
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="detailview_actionlinks actionlinks_events_todo">
	<tr><td align="left" class="genHeaderSmall">{$APP.LBL_ACTIONS}</td></tr>

	{if in_array($MODULE, getInventoryModules())}
		<!-- Inventory Actions -->
		{include file="Inventory/InventoryActions.tpl"}
	{/if}
</table>
{* vtlib customization: Avoid line break if custom links are present *}
{if !isset($CUSTOM_LINKS) || empty($CUSTOM_LINKS)}
	<br>
{/if}

{* vtlib customization: Custom links on the Detail view basic links *}
{if $CUSTOM_LINKS && $CUSTOM_LINKS.DETAILVIEWBASIC}
	<ul>
		{foreach item=CUSTOMLINK from=$CUSTOM_LINKS.DETAILVIEWBASIC}
			<li class="actionlink actionlink_customlink actionlink_{$CUSTOMLINK->linklabel|lower|replace:' ':'_'}">
				{assign var="customlink_href" value=$CUSTOMLINK->linkurl}
				{assign var="customlink_label" value=$CUSTOMLINK->linklabel}
				{assign var="customlink_success" value=$CUSTOMLINK->successmsg}
				{assign var="customlink_error" value=$CUSTOMLINK->errormsg}
				{if $customlink_label eq ''}
					{assign var="customlink_label" value=$customlink_href}
				{else}
					{* Pickup the translated label provided by the module *}
					{assign var="customlink_label" value=$customlink_label|@getTranslatedString:$CUSTOMLINK->module()}
				{/if}
				{if $customlink_href=='ACTIONSUBHEADER'}
					<span class="genHeaderSmall slds-truncate">{$customlink_label}</span>
				{else}
					{if $CUSTOMLINK->linkicon}
						{if strpos($CUSTOMLINK->linkicon, '}')>0}
							{assign var="customlink_iconinfo" value=$CUSTOMLINK->linkicon|json_decode:true}
							<span class="slds-icon_container slds-icon-{$customlink_iconinfo.library}-{$customlink_iconinfo.icon}" title="{$customlink_label}">
							<svg class="slds-icon slds-icon-text-default slds-icon_x-small" aria-hidden="true">
								<use xlink:href="include/LD/assets/icons/{$customlink_iconinfo.library}-sprite/svg/symbols.svg#{$customlink_iconinfo.icon}"></use>
							</svg>
							<span class="slds-assistive-text">{$customlink_label}</span>
							</span>
						{else}
							<a class="webMnu" href="{$customlink_href}" data-success="{$customlink_success}" data-error="{$customlink_error}" data-title="{$customlink_label}">
							<img hspace=5 align="absmiddle" border=0 src="{$CUSTOMLINK->linkicon}">
							</a>
						{/if}
					{else}
						<a class="webMnu" href="{$customlink_href}" data-success="{$customlink_success}" data-error="{$customlink_error}" data-title="{$customlink_label}"><img hspace=5 align="absmiddle" border=0 src="themes/images/no_icon.png"></a>
					{/if}
					&nbsp;<a class="slds-text-link_reset" href="{$customlink_href}" data-success="{$customlink_success}" data-error="{$customlink_error}" data-title="{$customlink_label}">{$customlink_label}</a>
				{/if}
			</li>
		{/foreach}
	</ul>
{/if}

{* vtlib customization: Custom links on the Detail view *}
{if $CUSTOM_LINKS && $CUSTOM_LINKS.DETAILVIEW}
	<br>
	{if !empty($CUSTOM_LINKS.DETAILVIEW)}
		<table>
			<tr><td class="dvtUnSelectedCell" style="background-color: rgb(204, 204, 204); padding: 5px;">
				<a href="javascript:;" onmouseover="fnvshobj(this,'vtlib_customLinksLay');" onclick="fnvshobj(this,'vtlib_customLinksLay');"><b>{$APP.LBL_MORE} {$APP.LBL_ACTIONS} &#187;</b></a>
			</td></tr>
		</table>
		<br>
		<div style="display: none; left: 193px; top: 106px;width:215px; position:absolute;" class="slds-box_border slds-card" id="vtlib_customLinksLay"
			 onmouseout="fninvsh('vtlib_customLinksLay')" onmouseover="fnvshNrm('vtlib_customLinksLay')">
			<table class="slds-p-around_xx-small">
				<tr><td style="border-bottom: 1px solid rgb(204, 204, 204); padding: 5px;"><b>{$APP.LBL_MORE} {$APP.LBL_ACTIONS} &#187;</b></td></tr>
				<tr>
					<td class="slds-p-around_xx-small">
					<ul>
						{foreach item=CUSTOMLINK from=$CUSTOM_LINKS.DETAILVIEW}
							{assign var="customlink_href" value=$CUSTOMLINK->linkurl}
							{assign var="customlink_label" value=$CUSTOMLINK->linklabel}
							{if $customlink_label eq ''}
								{assign var="customlink_label" value=$customlink_href}
							{else}
								{* Pickup the translated label provided by the module *}
								{assign var="customlink_label" value=$customlink_label|@getTranslatedString:$CUSTOMLINK->module()}
							{/if}
							<li>
							{if $CUSTOMLINK->linkicon}
								{if strpos($CUSTOMLINK->linkicon, '}')>0}
									{assign var="customlink_iconinfo" value=$CUSTOMLINK->linkicon|json_decode:true}
									<span class="slds-icon_container slds-icon-{$customlink_iconinfo.library}-{$customlink_iconinfo.icon}" title="{$customlink_label}">
									<svg class="slds-icon slds-icon-text-default slds-icon_x-small" aria-hidden="true">
										<use xlink:href="include/LD/assets/icons/{$customlink_iconinfo.library}-sprite/svg/symbols.svg#{$customlink_iconinfo.icon}"></use>
									</svg>
									<span class="slds-assistive-text">{$customlink_label}</span>
									</span>
								{else}
									<a class="webMnu" href="{$customlink_href}"><img hspace=5 align="absmiddle" border=0 src="{$CUSTOMLINK->linkicon}"></a>
								{/if}
							{else}
								<a class="webMnu" href="{$customlink_href}"><img hspace=5 align="absmiddle" border=0 src="themes/images/no_icon.png"></a>
							{/if}
							&nbsp;<a class="slds-text-link_reset" href="{$customlink_href}">{$customlink_label}</a>
							</li>
						{/foreach}
						</ul>
					</td>
				</tr>
			</table>
		</div>
	{/if}
{/if}
{* END *}
<!-- Action links END -->

{include file="TagCloudDisplay.tpl"}

{if !empty($CUSTOM_LINKS.DETAILVIEWWIDGET)}
	{foreach key=CUSTOMLINK_NO item=CUSTOMLINK from=$CUSTOM_LINKS.DETAILVIEWWIDGET}
		{assign var="customlink_href" value=$CUSTOMLINK->linkurl}
		{assign var="customlink_label" value=$CUSTOMLINK->linklabel}
		{* Ignore block:// type custom links which are handled earlier *}
		{if !preg_match("/^block:\/\/.*/", $customlink_href) && !preg_match("/^top:\/\/.*/", $customlink_href)}
			{if $customlink_label eq ''}
				{assign var="customlink_label" value=$customlink_href}
			{else}
				{* Pickup the translated label provided by the module *}
				{assign var="customlink_label" value=$customlink_label|@getTranslatedString:$CUSTOMLINK->module()}
			{/if}
			<br/>
			<input type="hidden" id="{$CUSTOMLINK->linklabel|replace:' ':''}LINKID" value="{$CUSTOMLINK->linkid}">
			<table style="border:0;width:100%" class="rightMailMerge" id="{$CUSTOMLINK->linklabel}">
				{if $CUSTOMLINK->widget_header}
					<tr>
						<td class="rightMailMergeHeader">
							<div>
							<b>{$customlink_label}</b>&nbsp;
							<img id="detailview_block_{$CUSTOMLINK->linkid}_indicator" style="display:none;" src="{'vtbusy.gif'|@vtiger_imageurl:$THEME}" border="0" align="absmiddle" />
							</div>
						</td>
					</tr>
				{/if}
				{if $CUSTOMLINK->widget_width neq ''}
					{assign var="widget_width" value="width:"|cat:$CUSTOMLINK->widget_width|cat:";"}
				{else}
					{assign var="widget_width" value=''}
				{/if}
				{if $CUSTOMLINK->widget_height neq ''}
					{assign var="widget_height" value="height:"|cat:$CUSTOMLINK->widget_height|cat:";"}
				{else}
					{assign var="widget_height" value=''}
				{/if}
				<tr style="height:25px">
					<td class="rightMailMergeContent"><div id="detailview_block_{$CUSTOMLINK->linkid}" style="{$widget_width} {$widget_height}"></div></td>
				</tr>
				<script type="text/javascript">
					vtlib_loadDetailViewWidget("{$customlink_href}", "detailview_block_{$CUSTOMLINK->linkid}", "detailview_block_{$CUSTOMLINK->linkid}_indicator");
				</script>
			</table>
		{/if}
	{/foreach}
{/if}
</td>
{/if}
</tr>
</table>

<!-- PUBLIC CONTENTS STOPS-->
</td>
</tr>
<tr>
<td>
<div class="small detailview_utils_table_bottom noprint">
{if empty($Module_Popup_Edit)}
<div class="detailview_utils_table_tabs">
<div class="detailview_utils_table_tab detailview_utils_table_tab_selected detailview_utils_table_tab_selected_bottom">{$SINGLE_MOD|@getTranslatedString:$MODULE} {$APP.LBL_INFORMATION}</div>
{if $SinglePane_View eq 'false' && $IS_REL_LIST neq false && $IS_REL_LIST|@count > 0}
{if $HASRELATEDPANES eq 'true'}
	{include file='RelatedPanes.tpl' tabposition='bottom' RETURN_RELATEDPANE=''}
{else}
<div class="detailview_utils_table_tab detailview_utils_table_tab_unselected detailview_utils_table_tab_unselected_bottom"><a href="index.php?action=CallRelatedList&module={$MODULE}&record={$ID}">{$APP.LBL_MORE} {$APP.LBL_INFORMATION}</a></div>
{/if}
{/if}
</div>
<div class="detailview_utils_table_tabactionsep detailview_utils_table_tabactionsep_bottom" id="detailview_utils_table_tabactionsep_bottom"></div>
<div class="detailview_utils_table_actions detailview_utils_table_actions_bottom" id="detailview_utils_actions_bottom">
<div class="slds-button-group" role="group">
	{if $EDIT_PERMISSION eq 'yes'}
		<button
			class="slds-button slds-button_neutral"
			title="{$APP.LBL_EDIT_BUTTON_TITLE}"
			value="{$APP.LBL_EDIT_BUTTON_TITLE}"
			accessKey="{$APP.LBL_EDIT_BUTTON_KEY}"
			onclick="DetailView.return_module.value='{$MODULE}'; 
					DetailView.return_action.value='DetailView';
					DetailView.return_id.value='{$ID}';
					DetailView.module.value='{$MODULE}';
					submitFormForAction('DetailView','EditView');"
			type="button"
			name="Edit"
			>
			<svg class="slds-button__icon slds-button__icon_left" aria-hidden="true">
				<use xlink:href="include/LD/assets/icons/utility-sprite/svg/symbols.svg#edit"></use>
			</svg>
			{$APP.LBL_EDIT_BUTTON_LABEL}
		</button>
	{/if}
	{if ((isset($CREATE_PERMISSION) && $CREATE_PERMISSION eq 'permitted') || (isset($EDIT_PERMISSION) && $EDIT_PERMISSION eq 'yes')) && $MODULE neq 'Documents'}
		<button
			class="slds-button slds-button_neutral"
			title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}"
			value="{$APP.LBL_DUPLICATE_BUTTON_TITLE}"
			accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}"
			onclick="DetailView.return_module.value='{$MODULE}'; 
					DetailView.return_action.value='DetailView'; 
					DetailView.isDuplicate.value='true';
					DetailView.module.value='{$MODULE}'; 
					submitFormForAction('DetailView','EditView');" 
			type="submit"
			name="Duplicate"
			>
			<svg class="slds-button__icon slds-button__icon_left" aria-hidden="true">
				<use xlink:href="include/LD/assets/icons/utility-sprite/svg/symbols.svg#file"></use>
			</svg>
			{$APP.LBL_DUPLICATE_BUTTON_LABEL}
		</button>
	{/if}
	{if $DELETE eq 'permitted'}	
		<button
			class="slds-button slds-button_text-destructive"
			title="{$APP.LBL_DELETE_BUTTON_TITLE}"
			value="{$APP.LBL_DELETE_BUTTON_TITLE}"
			accessKey="{$APP.LBL_DELETE_BUTTON_KEY}"
			onclick="DetailView.return_module.value='{$MODULE}'; 
				DetailView.return_action.value='index'; 
				{if $MODULE eq 'Accounts'} var confirmMsg = '{$APP.NTC_ACCOUNT_DELETE_CONFIRMATION}' {else} var confirmMsg = '{$APP.NTC_DELETE_CONFIRMATION}' {/if}; submitFormForActionWithConfirmation('DetailView', 'Delete', confirmMsg);"
			type="submit"
			name="Delete" 
			>
			<svg class="slds-button__icon slds-button__icon_left" aria-hidden="true">
				<use xlink:href="include/LD/assets/icons/utility-sprite/svg/symbols.svg#delete"></use>
			</svg>
			{$APP.LBL_DELETE_BUTTON_LABEL}
		</button>
	{/if}
</div>
{if empty($Module_Popup_Edit)}
<div class="slds-button-group" role="group">
	{include file='Components/DetailViewPirvNext.tpl'}
</div>
{/if}
</div>
{/if}
</div>
</td>
</tr>
</table>
<script>
var fieldname = new Array({$VALIDATION_DATA_FIELDNAME});
var fieldlabel = new Array({$VALIDATION_DATA_FIELDLABEL});
var fielddatatype = new Array({$VALIDATION_DATA_FIELDDATATYPE});
</script>
</td>
</tr></table>
{if $MODULE|hasEmailField}
<form name="SendMail" method="post"><div id="sendmail_cont" style="z-index:100001;position:absolute;"></div></form>
{/if}
