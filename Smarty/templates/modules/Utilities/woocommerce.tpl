{include file='Buttons_List.tpl'}
<section role="dialog" tabindex="-1" class="slds-fade-in-open slds-modal_large slds-app-launcher" aria-labelledby="header43" aria-modal="true">
<div class="slds-modal__container slds-p-around_none">
	<header class="slds-modal__header slds-grid slds-grid_align-spread slds-grid_vertical-align-center">
		<h2 id="header43" class="slds-text-heading_medium">
		<div class="slds-media__figure">
			<svg aria-hidden="true" class="slds-icon slds-icon-standard-user slds-m-right_small">
				<use xlink:href="include/LD/assets/icons/utility-sprite/svg/symbols.svg#sync"></use>
			</svg>
			{$TITLE_MESSAGE}
		</div>
		</h2>
	</header>
	<div class="slds-modal__content slds-app-launcher__content slds-p-around_medium">
	{if $ISADMIN}
		<form role="form" style="margin:0 100px;">
		<input type="hidden" name="module" value="Utilities">
		<input type="hidden" name="action" value="integration">
		<input type="hidden" name="_op" value="setconfigwc">
		<div class="slds-form-element">
			<label class="slds-checkbox_toggle slds-grid">
			<span class="slds-form-element__label slds-m-bottom_none">{'_active'|@getTranslatedString:$MODULE}</span>
			<input type="checkbox" name="woocommerce_active" aria-describedby="toggle-desc" {if $isActive}checked{/if} />
			<span id="toggle-desc" class="slds-checkbox_faux_container" aria-live="assertive">
				<span class="slds-checkbox_faux"></span>
				<span class="slds-checkbox_on">{'LBL_ENABLED'|@getTranslatedString:'Settings'}</span>
				<span class="slds-checkbox_off">{'LBL_DISABLED'|@getTranslatedString:'Settings'}</span>
			</span>
			</label>
		</div>
		<div class="slds-form-element slds-m-top_small">
			<label class="slds-form-element__label" for="cs">{'wccs'|@getTranslatedString:$MODULE}</label>
			<div class="slds-form-element__control">
				<input type="text" id="cs" name="cs" class="slds-input" value="{$cs}" />
			</div>
		</div>
		<div class="slds-form-element slds-m-top_small">
			<label class="slds-form-element__label" for="ck">{'wcck'|@getTranslatedString:$MODULE}</label>
			<div class="slds-form-element__control">
				<input type="text" id="ck" name="ck" class="slds-input" value="{$ck}" />
			</div>
		</div>
		<div class="slds-form-element slds-m-top_small">
			<label class="slds-form-element__label" for="wcurl">{'wcurl'|@getTranslatedString:$MODULE}</label>
			<div class="slds-form-element__control">
				<input type="text" id="wcurl" name="wcurl" class="slds-input" value="{$wcurl}" />
			</div>
		</div>
		<div class="slds-form-element slds-m-top_small">
			<label class="slds-form-element__label" for="wcsct">{'wcsct'|@getTranslatedString:$MODULE}</label>
			<div class="slds-form-element__control">
				<input type="text" id="wcsct" name="wcsct" class="slds-input" value="{$wcsct}" />
			</div>
		</div>
		<div class="slds-grid slds-gutters slds-m-top_medium">
			<div class="slds-col slds-size_1-of-3">
				<div class="slds-form-element">
					<label class="slds-checkbox_toggle slds-grid">
					<span class="slds-form-element__label slds-m-bottom_none">{'wccustomer'|@getTranslatedString:$MODULE}</span>
					<input type="checkbox" name="woocommerce_customer" aria-describedby="toggle-desc" {if $isContact}checked{/if} />
					<span id="toggle-desc" class="slds-checkbox_faux_container" aria-live="assertive">
						<span class="slds-checkbox_faux"></span>
						<span class="slds-checkbox_on slds-text-title_bold">{'SINGLE_Contacts'|@getTranslatedString:'Contacts'}</span>
						<span class="slds-checkbox_off slds-text-title_bold">{'SINGLE_Accounts'|@getTranslatedString:'Accounts'}</span>
					</span>
					</label>
				</div>
			</div>
			<div class="slds-col slds-size_1-of-3">
				<div class="slds-form-element">
					<label class="slds-checkbox_toggle slds-grid">
					<span class="slds-form-element__label slds-m-bottom_none">{'wcproduct'|@getTranslatedString:$MODULE}</span>
					<input type="checkbox" name="woocommerce_product" aria-describedby="toggle-desc" {if $isProduct}checked{/if} />
					<span id="toggle-desc" class="slds-checkbox_faux_container" aria-live="assertive">
						<span class="slds-checkbox_faux"></span>
						<span class="slds-checkbox_on slds-text-title_bold">{'SINGLE_Products'|@getTranslatedString:'Products'}</span>
						<span class="slds-checkbox_off slds-text-title_bold">{'SINGLE_Services'|@getTranslatedString:'Services'}</span>
					</span>
					</label>
				</div>
			</div>
			<div class="slds-col slds-size_1-of-3">
				<div class="slds-form-element">
					<label class="slds-checkbox_toggle slds-grid">
					<span class="slds-form-element__label slds-m-bottom_none">{'wcorder'|@getTranslatedString:$MODULE}</span>
					<input type="checkbox" name="woocommerce_order" aria-describedby="toggle-desc" {if $isSalesOrder}checked{/if} />
					<span id="toggle-desc" class="slds-checkbox_faux_container" aria-live="assertive">
						<span class="slds-checkbox_faux"></span>
						<span class="slds-checkbox_on slds-text-title_bold">{'SINGLE_SalesOrder'|@getTranslatedString:'SalesOrder'}</span>
						<span class="slds-checkbox_off slds-text-title_bold">{'SINGLE_Invoice'|@getTranslatedString:'Invoice'}</span>
					</span>
					</label>
				</div>
			</div>
		</div>
		<div class="slds-m-top_large">
			<button type="submit" class="slds-button slds-button_brand">{'LBL_SAVE_BUTTON_LABEL'|@getTranslatedString:$MODULE}</button>
		</div>
		</form>
	{/if}
	</div>
</div>
</section>