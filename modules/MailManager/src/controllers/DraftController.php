<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
include_once 'modules/MailManager/src/controllers/Controller.php';
include_once 'modules/MailManager/src/models/Draft.php';

/**
 * Class that handles Internal Email Drafts
 */
class MailManager_DraftController extends MailManager_Controller {

	/**
	* Function to process request, currently not used
	* @param MailManager_Request $request
	*/
	public function process(MailManager_Request $request) {
	}

	/**
	* Returns a List of search strings on the internal email Drafts
	* @return array of Email Fields
	*/
	public static function getSearchOptions() {
		return array('subject'=>'SUBJECT', 'saved_toid'=>'TO', 'description'=>'BODY', 'bccmail'=>'BCC', 'ccmail'=>'CC');
	}

	/**
	* Function which returns the Draft Model
	* @return MailManager_Model_DraftEmail
	*/
	public function connectorWithModel() {
		if ($this->mMailboxModel === false) {
			$this->mMailboxModel = MailManager_Model_DraftEmail::getInstance();
		}
		return $this->mMailboxModel;
	}
}
?>