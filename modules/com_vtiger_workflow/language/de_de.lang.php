<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

$mod_strings = array(
	'com_vtiger_workflow' => 'Workflows',
	'SINGLE_com_vtiger_workflow' => 'Workflow',
	'VTEmailTask' => 'Sende E-Mail',
	'VTEntityMethodTask' => 'benutzerdefinierte Funktion aktivieren',
	'VTCreateTodoTask' => 'Aufgabe erzeugen',
	'VTCreateEventTask' => 'Ereignis erzeugen',
	'VTSMSTask' => 'SMS Aufgabe',
	'LBL_EDIT_TASK'=>'Aufgabe bearbeiten',
	'LBL_EDIT_TASK_TITLE'=>'Aufgabe bearbeiten oder neu erzeugen...',
	'LBL_EDIT_WORKFLOW'=>'Workflow bearbeiten',
	'LBL_EDIT_WORKFLOW_TITLE'=>'Workflow bearbeiten oder neu erzeugen...',
	'LBL_FROM_TEMPLATE'=>'Aus einer Vorlage',
	'LBL_NEW_WORKFLOW'=>'Neuer Workflow',
	'LBL_WF_MANUAL_WARNING'=>'You are changing the title of a manual trigger point workflow. If it is used in a web service call, you may break it.',
	'LBL_NEW_TEMPLATE'=>'Als Vorlage speichern',
	'LBL_CREATE_WORKFLOW_FOR'=>'Erzeuge Workflow für...',
	'LBL_FOR_MODULE'=>'für Modul',
	'LBL_CHOOSE_A_TEMPLATE'=>'Vorlage auswählen',
	'LBL_VALIDATION_MISSING_MANDATORY_FIELDS'=>'Pflichtfelder sind leer.',
	'LBL_VALIDATION_INVALID_DATE_RANGE'=>'Die Anfangszeit liegt nach der Endezeit',
	'LBL_ERROR_NO_WORKFLOW'=>'Dieser Workflow existiert nicht',
	'LBL_ERROR_NO_TASK'=>'Diese Aufgabe existiert nicht',
	'LBL_ERROR_NOT_ADMIN'=>'Diesen CRM Modul können nur Nutzer mit Administratorrechten nutzen.',
	'LBL_CREATE_WORKFLOW'=>'Workflow erzeugen',
	'LBL_WORKFLOW_LIST'=>'Liste der Workflow',
	'LBL_AVAILABLE_WORKLIST_LIST'=>'Verfügbare Workflows',
	'LBL_LOADING'=>'Lade...',
	'LBL_REEVALCONDITIONS' => 'Bedingungen bei Ausführung überprüfen',
	'evaluate' => 'Evaluate',
	'LBL_VALIDATION_ERROR'=>'Überprüfungsfehler',
	'LBL_SELECT_OPTION_DOTDOTDOT'=>'Option wählen...',
	'LBL_WORKFLOW_NOTE_CRON_CONFIG'=>'Hinweis: Sie können die Ersatzfelder verwenden.',
	'LBL_NO_TEMPLATES'=>'keine Vorlagen verfügbar',
	'LBL_SELECT'=>'Wähle',
	'LBL_MESSAGE'=>'Nachricht',
	'LBL_SET_FIELD_VALUES'=>'Setze Feldwerte',
	'LBL_ADD_FIELD'=>'Feld hinzufügen',
	'LBL_DELETE_FIELD' => 'Delete Field',

	'LBL_USE_FIELD_VALUE_DASHDASH'=>'-- benutze Feldwert --',
	'LBL_USE_FUNCTION_DASHDASH'=>'-- benutze Funktion --',
	'LBL_FUNCTIONS'=>'Expression Functions',
	'Math' => 'Math',
	'Date and Time' => 'Date and Time',
	'Text' => 'Text',
	'Information' => 'Information',
	'Logical' => 'Logical',
	'Finance' => 'Finance',
	'Application' => 'Application',
	'Statistics' => 'Statistics',

	'LBL_RAW_TEXT'=>'reiner Text',
	'LBL_FIELD'=>'Feld',
	'LBL_EXPRESSION'=>'Ausdruck',
	'LBL_SET_EXPRESSION'=>'setze Ausdruck',

	'LBL_MANUAL'=>'System. Mass Actions',
	'LBL_RECORD_ACCESS_CONTROL' => 'Record Access Control',
	'LBL_NEW_CONDITION_GROUP_BUTTON_LABEL'=>'Neue Bedingungsgruppe',

	'VTUpdateFieldsTask' => 'Aktualisiere Felder',
	'LBL_ON_DELETE'=>'Beim Löschen',

	'LBL_VALIDATION_DUPLICATE_FIELDNAMES' => 'Ein Feld wurde mehrmals gewählt.',
	'LBL_VALIDATION_INVALID_FIELD_VALUES' => 'Ungültige Feldwerte',
	'LBL_CREATE_ENTITY_NOTE_ORDER_MATTERS' => 'Hinweis: Ausdrücke werden in der Reihenfolge der Feldwerte ausgewerte.
                                            Stellen Sie sicher, dass der gesuchte Wert im Ausdruck zur Verfügung steht.',
	'LBL_CREATE_ENTITY_NOTE_BUSINESSMAPS' => 'Note: You can use a Field Business Map to map fields from one entity to the other, in that case the business map definitions will overwrite the ones defined here.',
	'LBL_SET_VALUE' => 'setze Wert',

	'LBL_EMAIL_RECIPIENT' => 'Empfänger',
	'LBL_EMAIL_CC' => 'CC',
	'LBL_EMAIL_BCC' => 'BCC',
	'LBL_EMAIL_SUBJECT' => 'Betreff',
	'LBL_EMAIL_FROMNAME' => 'Absendername',
	'LBL_EMAIL_FROMEMAIL' => 'Absender-E-Mail',
	'LBL_EMAIL_REPLYTO' => 'Antwort an',
	'LBL_AttachmentInField' => 'Anhang im Feld',
	'LBL_WORKFLOW_NOTE_EVENT_TASK_TIMEZONE' => 'Hinweis: alle Datums-, Zeit- und wiederkehrende Informatione, die für Aktivitäten konfiguriert wurden
                                                        berücksichtigen die in der Konfigurationsdatei "config.inc.php" gesetzte Zeitzone',

	'Select Meta Variables' => 'Wähle Meta Variable',
	'Current Date' => 'aktuelles Datum',
	'Current Time' => 'aktuelle Zeit',
	'System Timezone' => 'System Zeitzone',
	'User Timezone' => 'User Zeitzone',
	'CRM Detail View URL' => 'URL zur CRM Detailansicht',
	'Portal Detail View URL' => 'URL zur Portal Detailansicht',
	'Site Url' => 'Webadresse',
	'Portal Url' => 'Portaladresse',
	'groupEmailList' => 'Group Email List',
	'groupUsersWsIdList' => 'Group Users Web Service Id List',
	'Recommended frequency for Workflow is 15 mins' => 'Recommended frequency for Workflow is 15 mins',
	'Workflow'=>'Workflow',
	'WORKFLOW_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Workflow löschen möchten?',
	'LBL_DELETE_WORKFLOW' => 'Workflow löschen',
	'WORKFLOW_ACTIVATE_CONFIRMATION' => 'Are you sure you want to activate this Workflow?',
	'LBL_ACTIVATE_WORKFLOW' => 'Activate Workflow',
	'WORKFLOW_DEACTIVATE_CONFIRMATION' => 'Are you sure you want to deactivate this Workflow?',
	'LBL_DEACTIVATE_WORKFLOW' => 'Deactivate Workflow',

	'VTCreateEntityTask' => 'erstelle Objekt',
	'LBL_ENTITY_TYPE' => 'Objekttyp',
	'LBL_SELECT_ENTITY_TYPE' => '-- wähle Objekttyp --',
	'Assigned User' => 'Zugeordneter Benutzer',
	'LBL_NO_ENTITIES_FOUND' => 'Keine Objekte zum Erstellen gefunden',
	'LBL_PARENT_OWNER' => 'Parent Record Owner',
	'LBL_SPECIAL_OPTIONS' => 'Special Options',
	'CBTagTask' => 'Add/Delete Tag',
	'CBMassiveUpdateRelatedTask' => 'Update Related Records',
	'DuplicateRecords' => 'Duplicate Records',
	'Add Tag' => 'Add Tag',
	'Delete Tag' => 'Delete Tag',
	'Tags' => 'Tags',
	'ForAllUsers' => 'For All Users',
	'ForCurrentUser' => 'Only For Current User',
	'CBRelateSales' => 'Relate Product/Service',
	'Relate Product' => 'Relate Product',
	'Relate Service' => 'Relate Service',
	'Relate with AccountVendor' => 'Relate with Account/Vendor',
	'Relate with Contact' => 'Relate with Contact',
	'CBDeleteRelatedTask' => 'Delete Related Records',
	'CBAssignRelatedTask' => 'Assign Related Records',
	'CBSelectcbMap' => 'Select Business Rule',
	'ConvertInventoryModule' => 'Convert Inventory Module Records',
	'ConvertInventoryModuleMessage' => 'The field mappings is the default application mapping and can be adjusted using Field Mapping Business Rules.',
	'CBSendMMMSGTask' => 'Send Message to Mattermost',
	'Send Message To MM' => 'Send Message to Mattermost',
	'VTSendMessage2MMTask' => 'Send Message to Mattermost',
	'whatsappworkflowtask' => 'Send WhatsApp Message',
	'Whatsapp Workflow Task' => 'Send WhatsApp Message',
	'WhatsappWorkflowTask' => 'Send WhatsApp Message',
	'Many to Many Relation Task' => 'Many to Many Relation Task',
	'Set Many to Many Relation' => 'Set Many to Many Relation',
	'NotifyOnPortalTicketCreation' => 'Notify On Portal Ticket Creation',
	'NotifyOnPortalTicketComment' => 'Notify On Portal Ticket Comment',
	'NotifyOwnerOnTicketChange' => 'Notify Owner On Ticket Change',
	'NotifyParentOnTicketChange' => 'Notify Parent On Ticket Change',
	'LBL_EVENTNAME' => 'Event Name',
	'LBL_DESCRIPTION' => 'Beschreibung',
	'LBL_STATUS' => 'Status',
	'LBL_TYPE' => 'Typ',
	'LBL_START_TIME' => 'Startzeit',
	'LBL_START_DATE' => 'Startdatum',
	'LBL_END_TIME' => 'Endzeit',
	'LBL_END_DATE' => 'Enddatum',
	'LBL_SET_DATE'=>'Datum festlegen',
	'LBL_AFTER' => 'Nach',
	'LBL_BEFORE' => 'Vor',
	'LBL_DAYS' => 'Tagen',
	'LBL_HOURS' => 'Hours',
	'LBL_HELPDESK_SUPPORT_EMAILID'=>'Trouble Ticket E-Mail-Id',
	'LBL_HELPDESK_SUPPORT_NAME'=>'Trouble Ticket Support Name',
	'LBL_ORGANIZATION_LOGO'=>'Logo Name',
	'LBL_RUN_WORKFLOW' => 'Workflow starten',
	'LBL_AT_TIME' => 'At Time',
	'LBL_HOURLY' => 'stündlich',
	'LBL_DAILY' => 'täglich',
	'LBL_WEEKLY' => 'wöchentlich',
	'LBL_ON_THESE_DAYS' => 'An diesen Tagen',
	'LBL_MONTHLY_BY_DATE' => 'Monatlich zu festem Datum',
	'LBL_MONTHLY_BY_WEEKDAY' => 'Monatlich an Wochentag',
	'LBL_YEARLY' => 'Jährlich',
	'LBL_MINUTES_INTERVAL'=>'Minuten-Intervall',
	'LBL_EVERY_MINUTEINTERVAL'=>'Alle',
	'LBL_MINUTES'=>'Minuten',
	'LBL_SPECIFIC_DATE' => 'An festgelegtem Tag',
	'LBL_CHOOSE_DATE' => 'Datum wählen',
	'LBL_SELECT_MONTH_AND_DAY' => 'Monat und Tag auswählen',
	'LBL_SELECTED_DATES' => 'Ausgewählte Daten',
	'LBL_EXCEEDING_MAXIMUM_LIMIT' => 'Maximum limit exceeded',
	'LBL_NEXT_TRIGGER_TIME' => 'Next trigger time on',
	'UpdateInventoryProducts On Every Save' => 'Update Product Inventory',
	'Send Email to user when Notifyowner is True' => 'Send Email to user when Notifyowner is True',
	'Send Email to user when Portal User is True' => 'Send Email to user when Portal User is True',
	'Send Email to users on Potential creation' => 'Send Email to user on Opportunity creation',
	'Workflow for Contact Creation or Modification' => 'Send Email to Contact with Portal Login information',
	'Workflow for Ticket Created from Portal' => 'Workflow for Ticket Created from Portal',
	'Workflow for Ticket Updated from Portal' => 'Workflow for Ticket Updated from Portal',
	'Workflow for Ticket Change, not from the Portal' => 'Workflow for Ticket Change, not from the Portal',
	'Workflow for Events when Send Notification is True' => 'Workflow for Events when Send Notification is True',
	'Workflow for Calendar Todos when Send Notification is True' => 'Workflow for Calendar Todos when Send Notification is True',
	'Calculate or Update forecast amount' => 'Calculate or Update forecast amount',
	'LBL_METHOD_NAME' => 'Methodenname',
	'NO_METHOD_AVAILABLE' => 'Für dieses Modul ist keine Methode vorhanden.',
	'GenerateDocument'=>'Generate Document',
	'Templates'=>'Templates',
	'launchrelwf' => 'Launch workflows on related updates',
	'launchwf' => 'Launch workflows on updates',
	'LBL_WFPURPOSE' => 'Zweck',
	'Run Webservice Workflow Task' => 'Run Web Service',
	'RunWebserviceWorkflowTask' => 'Run Web Service',
	'runwebserviceworkflowtask' => 'Run Web Service',
	'Select IO Map' => 'Select IO Map',
	'Select Config Map' => 'Select Config Map',
	'CBPushNotificationTask' => 'Push Notification',
	'pushnoturl' => 'Push Notification URL',
	'CBQuestionMViewFunction' => 'Update Materialized View',
	'LBL_WHERE_TO_SAVE' => 'Where to Save:',
	'LBL_WHAT_TO_ENCODE' => 'What to Encode',
	'Select Field to Save Encoded Value' => 'Select Field to Save Encoded Value',
	'Select Field to Encode' => 'Select Field to Encode',
	'Encoding Type' => 'Encoding Type',
	'Select Encoding Type' => 'Select Encoding Type',
	'Generate Image Code' => 'Generate Image Code',
	'Generate Image Code Workflow Task' => 'Generate Image Code Workflow Task',
	'GenerateImageCodeWorkflowTask' => 'Generate Image Code Workflow Task',
	'HELP_GenerateImageCodeWorkflowTask' => 'This task will read the value of a field in the module, normally a serial number, and generate an EAN, QR or similar image code and save it in an image field of the module.',
	'HELP_GenerateImageCode_ValueToEncode' => 'Field name where the value to encode will be read from',
	'HELP_GenerateImageCode_EncodingType' => 'Encoding type to be used for the image',
	'HELP_GenerateImageCode_SaveTo' => 'Image field where the image will be saved',
	'Watermark' => 'Watermark',
	'CBWatermark' => 'Watermark',
	'HELP_CBWatermark' => 'This workflow task will apply a watermark to the image contained in the given field',
	'HELP_WaterMark_Image_Value' => 'Watermark image url',
	'HELP_WaterMark_Image_Field' => 'The field of the image that gets watermarked',
	'HELP_WaterMark_Size' => 'The size of the watermark image in percentage',
	'HELP_WaterMark_Position' => 'The position of the watermark in the image',
	'CONTEXT_VARIABLES' => 'Context variables',
	'LBL_ON_RELATE' => 'On Relate with',
	'LBL_ON_UNRELATE' => 'On Unrelate with',
	'LBL_ROW' => 'Row',
	'ERR_IncorrectFile' => 'Incorrect File or File Content',
	'ERR_CannotProcess' => 'Cannot process workflow',
	'ERR_ExpTypeUndefined' => 'Expression Type Undefined',
	'ERR_NoCRMIDforEvaluate' => 'No record selected for evaluation context',
	'EmptyForAllDateRanges' => 'Leave empty for ALL date ranges.',
	'LBL_SAVEBASED' => 'Save based',
	'LBL_TIMEBASED' => 'Time or Setting based',
	'Record Set' => 'Record Set for Mass Actions',
	'Select where to get the records from' => 'Select where to get the records from',
	'Launch Now' => 'Launch Now',
	'Execute Expression' => 'Execute Expression',
	'wfExecExpression' => 'Execute Expression',
	'wdexeexpVariableHelp' => 'The value will be saved in the context with this name if given. If not only the expression will be executed.',
	'LBL_EXPRESSIONS' => 'Expressions',
	'EXP_RULES' => 'Rules to follow while using expressions',
	'EXP_RULE1' => "Define text field values inside single quotes (' ').",
	'EXP_RULE2' => 'Use arithmetic operators to perform Addition(+), Subtraction(-), Multiplication(*), and Division(/). You can perform these operations between two or more fields, values, or combination of both fields and values.',
	'EXP_RULE3' => 'Use relational operators in the expressions',
	'equal to' => 'equal to',
	'not equal to' => 'not equal to',
	'EXP_RULE4' => 'Use binary values for the checkbox fields: 0 for false/no, 1 for true/yes.',
	'Select source module' => 'Select source module',
	'Business Question' => 'Business Question',
	'Select File Type' => 'Select file type',
	'Launch Workflow' => 'Launch Workflow',
	'CBLaunchWorkFlowTask' => 'Launch Workflow',
	'LBL_EXECUTE_THIS_WORKFLOW' => 'Execute This Workflow',
	'LBL_WITH_THIS_CONDITION' => 'With This Condition',
	'LBL_WITH_THIS_RECORDSET' => 'On this Record Set',
	'On the Related' => 'On the Related',
	'LBL_CURRENT_RECORD' => 'On Current Record',
	'LBL_IDS' => 'On These CRMIDs',
	'LBL_SELECT_CREDENTIAL' => 'Select Credential',
	'LBL_SEND_FILE' => 'Send file to',
	'FILENAME' => 'Destination filename',
	'LINK_EMAIL_TEMPLATE' => 'Link with email template',
	'LBL_LINKED' => 'linked',
	'LBL_UNLINKED' => 'unlinked',
	'LBL_SELECT_EMAIL_TEMPLATE' => 'Select Email Template',
	'LBL_SELECT_SENDGRID_EMAIL_TEMPLATE' => 'Select SendGrid Email Template',
	'LBL_LOAD_SENDGRID_TEMPLATES' => 'Load SendGrid Templates',
	'LBL_PREVIEW_BUTTON' => 'Preview',
	'Records execution success' => 'Records execution success',
	'Records put in queue' => 'Records put in queue',
	'Records' => 'Records:',
	'LBL_ONESIGNAL_NOTIFICATION_HEADING' => 'Notification Heading',
	'LBL_ONESIGNAL_NOTIFICATION_SUBTITLE' => 'Notification Subtitle',
	'LBL_NOTIFICATION_CONTENT' => 'Notification Content',
	'LBL_ONESIGNAL_NOTIFICATION_INCLUDE_SEGMENT' => 'Included Segments',
	'LBL_ONESIGNAL_NOTIFICATION_EXCLUDED_SEGMENT' => 'Excluded Segments',
	'CBSendOneSignalNotificationWorkFlowTask' => 'Send OneSignal Notification',
	'Send OneSignal Notification' => 'Send OneSignal Notification',
	'CBUpsertTask' => 'Upsert',
	'Generate Report Task' => 'Generate Report Task',
	'Generate Report Workflow Task' => 'Generate Report Workflow Task',
	'Send File' => 'Send File',
	'Assigns the next counter value to any field based on the rules of the record' => 'Assigns the next counter value to any field based on the rules of the record',
	'Number/String' => 'Number/String',
	'CRMID or AutoNumber field value of the record with details to get next increment value' => 'CRMID or AutoNumber field value of the record with details to get next increment value',
	'CBSignPDFDocument' => 'Sign PDF Document',
	'Image Field' => 'Image Field',
	'Which field from Users should be used as a signature?' => 'Which field from Users should be used as a signature?',
	'Coordinates' => 'Coordinates',
	'Coordinate X' => 'Coordinate X',
	'Coordinate Y' => 'Coordinate Y',
	'CBAddNotification' => 'Add Notification',
	'HELP_CBAddNotification' => 'Add notification events with actions as reminders and pending tasks for the users. These notifications will appear in the notification panel and Pending Action widget.',
	'HELP_CBAddNotification_Module' => 'Module related to the notification. By default will be the module triggering the workflow',
	'HELP_CBAddNotification_Record' => 'Record related to the notification. Information from the record will be used to show the event. By default will be the record triggering the workflow',
	'HELP_CBAddNotification_Date' => 'Date of the notification in ISO format. By default will be the date time of the workflow trigger',
	'HELP_CBAddNotification_Time' => 'Time of the notification. By default will be the date time of the workflow trigger',
	'HELP_CBAddNotification_MoreAction' => 'More Action JSON. This link is an additional action to show on the notification.<br>{"label":"some label", "link":"some link", "type":"link or click"}',
	'HELP_CBAddNotification_MoreInfo' => 'More Information JSON. For events not related to records we can use this JSON to set the values to use:<br>{"icon":["standard","account"], "subject":"subject", "subtitle":"sub title"}',
	'HELP_CBAddNotification_Owner' => 'User owner of the notification. By default will be the current user when the workflow triggers',
	'HELP_CBAddNotification_Related' => 'Notification is additionally related to this record. If empty and "Record" is set, the account/contact related to Record will be used.',
);
?>
