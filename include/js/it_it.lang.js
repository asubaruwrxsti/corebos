/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/

var alert_arr = {
	'DELETE':'Sicuro di voler cancellare il selezionato',
	'RECORDS':' record?',
	'SELECT':'Prego selezionare almeno una riga',
	'SELECTCONDITION':'Please select at least one condition',
	'SELECTTEMPLATE':'Please select at least one document Template',
	'SELECTMERGE':'Please select an entity to merge!',
	'GENDOCSAVED':'Document saved. Please verify that it has been created correctly.',
	'DELETE_ACCOUNT':'Cancellando questa Azienda(e) verranno cancellate  anche le opportunit\u00E0 e i preventivi associati. Sicuro di voler eliminare',
	'DELETE_VENDOR':'Cancellado il fornitore verranno rimossi anche gli ordini di acquisto correlati. Sicuro di voler procedere',
	'SELECT_MAILID':'Prego selezionare un identificativo di email valido',
	'OVERWRITE_EXISTING_ACCOUNT1':'Vuoi sovrascrivere l\'indirizzo con quello di questa azienda(',
	'OVERWRITE_EXISTING_ACCOUNT2':') selezionato?',
	'OVERWRITE_EXISTING_CONTACT1':'Sovrascrivi indirizzo esistente con questo contatto selezionato(',
	'OVERWRITE_EXISTING_CONTACT2':') dettagli indirizzo?',
	'MISSING_FIELDS':'Numero di campi non specificato:',
	'NOT_ALLOWED_TO_EDIT':'non hai i privilegi per modificare questo campo',
	'NOT_ALLOWED_TO_EDIT_FIELDS':'non hai i privilegi per modificare questi campi',
	'COLUMNS_CANNOT_BE_EMPTY':'Le colonne selezionate non possono essere vuote',
	'CANNOT_BE_EMPTY':' non pu\u00F2 essere vuoto',
	'CANNOT_BE_NONE':' non pu\u00F2 essere nullo',
	'ENTER_VALID':'Prego inserire un valido',
	'SHOULDBE_LESS':' deve essere minore di',
	'SHOULDBE_LESS_EQUAL':' deve essere minore o uguale a',
	'SHOULDBE_EQUAL':' deve essere uguale a',
	'SHOULDBE_GREATER':' deve essere maggiore di',
	'SHOULDBE_GREATER_EQUAL':' deve essere maggiore o uguale a',
	'INVALID':'Non valido',
	'EXCEEDS_MAX':' esce dai limiti massimi',
	'OUT_OF_RANGE':' fuori dai limiti massimi',
	'SHOULDNOTBE_EQUAL':' non deve essere uguale a',
	'PORTAL_PROVIDE_EMAILID':'L\'utente del portale deve specificare un identificativo di email per entrare',
	'ADD_CONFIRMATION':'Sicuro di voler aggiungere',
	'ACCOUNTNAME_CANNOT_EMPTY':'Nome Azienda non pu\u00F2 essere vuoto',
	'CANT_SELECT_CONTACTS':'Non \u00E8 possibile selezionare il contatto correlato dal Lead',
	'LBL_THIS':'Questo',
	'DOESNOT_HAVE_MAILIDS':' non ha alcun identificativo di email',
	'DOESNOT_HAVE_AN_MAILID':'" '+'non ha alcun identificativo di email',
	'MISSING_REQUIRED_FIELDS':'Mancano dei campi obbligatori:',
	'READONLY':'\u00E8 in sola lettura',
	'SELECT_ATLEAST_ONE_USER':'Prego, selezionare almeno un utente',
	'DISABLE_SHARING_CONFIRMATION':'Sicuro di voler disabilitare le condivisioni selezionate',
	'USERS':' utente(i) ?',
	'ENDTIME_GREATER_THAN_STARTTIME':'Data fine deve essere maggiore di data inizio',
	'MISSING_EVENT_NAME':'Omesso il nome dell\'evento',
	'EVENT_TYPE_NOT_SELECTED':'Non e\' stato scelto il tipo di evento',
	'SITEURL_CANNOT_BE_EMPTY':'L\'URL del sito non pu\u00F2 essere vuoto',
	'SITENAME_CANNOT_BE_EMPTY':'Il nome del sito non pu\u00F2 essere vuoto',
	'LISTPRICE_CANNOT_BE_EMPTY':'Il prezzo di listino non pu\u00F2 essere vuoto',
	'INVALID_LIST_PRICE':'Prezzo di listino non valido',
	'PROBLEM_ACCESSSING_URL':'Problemi di accesso all\'URL: ',
	'CODE':' Codice:',
	'WISH_TO_QUALIFY_MAIL_AS_CONTACT':'Sicuro di voler qualificare questa email come contatto?',
	'SELECT_ATLEAST_ONEMSG_TO_DEL':'Prego, selezionare almeno un messaggio da rimuover',
	'ERROR':'Errore',
	'FIELD_TYPE_NOT_SELECTED':'Tipo di campo non selezionato',
	'SPECIAL_CHARACTERS_NOT_ALLOWED':'I caratteri speciali non sono ammessi nella label del campo',
	'SPECIAL_CHARACTERS':'Caratteri Speciali',
	'NOT_ALLOWED':'non sono permessi. Prego ritentare con altri valori',
	'DUPLICATE_MAPPING_ACCOUNTS':'Mappatura duplicati per le Aziende!',
	'DUPLICATE_MAPPING_CONTACTS':'Mappatura dei duplicati per i Contatti!',
	'DUPLICATE_MAPPING_POTENTIAL':'Mappatura dei duplicati per le Opportunit\u00E0!',
	'ERROR_WHILE_EDITING':'Errore in modifica',
	'CURRENCY_CHANGE_INFO':'Il cambio di valuta \u00E8 avvenuto con successo',
	'CURRENCY_CONVERSION_INFO':'Sicuro di voler usare il dollaro $ come valuta? \n Premi su OK per rimanere nel $, Annulla per cambiare il tasso di cambio.',
	'THE_EMAILID': 'L\'identificativo di email \'',
	'EMAIL_FIELD_INVALID':'\' nel campo email non \u00E8 valido.',
	'MISSING_REPORT_NAME':'Nome report non specificato',
	'REPORT_NAME_EXISTS':'Nome report gi\u00E0 esistente, prova ancora...',
	'WANT_TO_CHANGE_CONTACT_ADDR':'Vuoi modificare gli indirizzi del contatto collegato a questa Azienda?',
	'SURE_TO_DELETE':'Sicuro di voler eliminare ?',
	'NO_PRODUCT_SELECTED':'Nessun prodotto selezionato. Selezionare almeno un prodotto',
	'VALID_FINAL_PERCENT':'Inserire un valore valido per la percentuale di sconto',
	'VALID_FINAL_AMOUNT':'Inserire un valore valido per l\'ammontare dello sconto',
	'VALID_SHIPPING_CHARGE':'Inserire un valore valido per le spese di spedizione',
	'VALID_ADJUSTMENT':'Inserire un valore valido per l\'arrotondamento',
	'WANT_TO_CONTINUE':'Vuoi procedere?',
	'ENTER_VALID_TAX':'Prego inserire un valore valido per le tasse',
	'VALID_TAX_NAME':'Prego inserire un nome tassa valido',
	'CORRECT_TAX_VALUE':'Prego inserire un valore corretto per la tassa',
	'ENTER_POSITIVE_VALUE':'Prego inserire un valore positivo',
	'LABEL_SHOULDNOT_EMPTY':'La label della tassa non pu\u00F2 essere vuota',
	'NOT_VALID_ENTRY':'non \u00E8 un valore valido. Prego inserirne un valido',
	'VALID_DISCOUNT_PERCENT':'Prego inserire un valore valido per la percentuale di sconto',
	'VALID_DISCOUNT_AMOUNT':'Prego inserire un valore valido per l\'ammontare dello sconto',
	'SELECT_TEMPLATE_TO_MERGE':'Prego selezionare un template per il merge',
	'SELECTED_MORE_THAN_ONCE':'Hai selezionato i seguenti prodotti pi\u00F9 di una volta.',
	'YES':'si',
	'NO':'no',
	'MAIL':'mail',
	'EQUALS':'uguale',
	'NOT_EQUALS_TO':'diverso',
	'STARTS_WITH':'inizia per',
	'CONTAINS':'contiene',
	'DOES_NOT_CONTAINS':'non contiene',
	'LESS_THAN':'minore di',
	'GREATER_THAN':'maggiore di',
	'LESS_OR_EQUALS':'minore o uguale',
	'GREATER_OR_EQUALS':'maggiore o uguale',
	'NO_SPECIAL_CHARS':'I caratteri speciali non sono amessi nella stringa di fattura',
	'PLS_SELECT_VALID_FILE':'Prego selezionare un file con una delle seguenti estensioni:\n',
	'NO_SPECIAL':'caratteri speciali non sono ammessi',
	'NO_QUOTES':'Apostrofi (\'), virgolette (") ed il simbolo di somma (+) non sono consentiti',
	'IN_PROFILENAME':' nel nome del profilo',
	'IN_GROUPNAME':' nel nome del gruppo',
	'IN_ROLENAME':' nel nome del ruolo',
	'VALID_TAX_PERCENT':'Prego inserire un valore valido per la percentuale delle tasse',
	'VALID_SH_TAX':'Prego inserire un valore valido per le tasse di spedizione',
	'ROLE_DRAG_ERR_MSG':'Non \u00E8 consentito cancellare un ruolo superiore da uno inferiore',
	'LBL_DEL':'Canc',
	'VALID_DATA' :' Prego inserire un dato valido...',
	'STDFILTER':'Filri standard',
	'STARTDATE':'Data inzio',
	'ENDDATE':'Data fine',
	'START_DATE_TIME' :'Data e orario inizio',
	'START_TIME':'Orario inizio',
	'LBL_AND':'E',
	'LBL_OR': 'O',
	'LBL_ENTER_VALID_PORT':'Prego inserire un numero di porta valido',
	'IN_USERNAME':' nel Nome Utente',
	'LBL_ENTER_VALID_NO':'Prego inseire un numero valido',
	'LBL_PROVIDE_YES_NO':' Valore non valido.\n Prego inserire Yes o No',
	'LBL_SELECT_CRITERIA':' Criterio non valido.\n Prego selezionare un criterio',
	'LBL_DOES_NOT_START_WITH' : 'does not start with',
	'LBL_DOES_NOT_END_WITH' : 'does not end with',
	'DOES_NOT_START_WITH':'does not start with',
	'DOES_NOT_END_WITH':'does not end with',
	'SOUNDEX':'soundex',
	'REGEXP':'regexp',
	'Widget_Deleted_Sucessfully':'Widget deleted sucessfully',

	'OPPORTUNITYNAME_CANNOT_BE_EMPTY':'Il campo nome per le opportunit&egrave; non deve essere vuoto',
	'NAME_DESC':' per Nome Cartella & Descrizione',
	'ENDS_WITH':'finisce con',
	'SHARED_EVENT_DEL_MSG':'Questo utente non ha autorizzazioni per cancellare o modificare eventi condivisi.',

	'LBL_WRONG_IMAGE_TYPE':'Tipo di file immagine per i contatti - jpeg, png, jpg, pjpeg, x-png or gif',
	'SELECT_MAIL_MOVE':'Prego scegli una mail e poi sposta..',

	'LBL_NOTSEARCH_WITHSEARCH_ALL':'Non hai utilizzato la funzione di ricerca. Tutti i record verranno esportati in',
	'LBL_NOTSEARCH_WITHSEARCH_CURRENTPAGE':'Non hai utilizzato la funzione di ricerca. Ma hai selezionato l\'opzione ricerca&pagina corrente, per cui i record della pagina corrente verranno esportati in',
	'LBL_NO_DATA_SELECTED':'Nessun record selezionato. Seleziona almeno un record da esportare.',
	'LBL_SEARCH_WITHOUTSEARCH_ALL':'Hai usato l\'opzione di ricerca ma non hai selezionato n\u00E8 l\'opzione senza n\u00E8 l\'opzione tutti.\n Clicca [ok] per esportare tutti i dati o clicca [cancel] e riprova con altri criteri di esportazione.',
	'STOCK_IS_NOT_ENOUGH':'Lo Stock in magazzino non \u00E8 sufficiente',
	'LBL_QTY_IN_STOCK' : 'Quantit\u00E0 in Stock',
	'INVALID_QTY':'Quantit\u00E0 non valida',
	'LBL_SEARCH_WITHOUTSEARCH_CURRENTPAGE':'Hai utilizzato la funzione di ricerca, ma non hai selezionato l\'opzione senza ricerca&pagina corrente.\n  Clicca [ok] per esportare tutti i dati o\n clicca [cancel] e riprova con altri criteri di esportazione.',
	'LBL_SELECT_COLUMN':'Colonna non valida.\n Prego seleziona una colonna valida',
	'LBL_NOT_ACCESSIBLE':'Non Accessibile',
	'LBL_FILENAME_LENGTH_EXCEED_ERR':'Il nome del file non pu\u00F2 superare i 255 caratteri di lunghezza',
	'LBL_DONT_HAVE_EMAIL_PERMISSION':'Non hai i permessi per il campo Email quindi non puoi selezionare l\'id dell\'email',
	'LBL_NO_FEEDS_SELECTED':'Nessun Feed selezionato',
	'LBL_SELECT_PICKLIST':'Prego seleziona almeno un valore da eliminare',
	'LBL_CANT_REMOVE':'Non puoi eliminare tutti i valori',

	'LBL_GIVE_PICKLIST_VALUE':'Prego fornire qualche valore da essere sostituito alla picklist',
	'LBL_SELECT_ROLE':'Prego selezionare almeno un ruolo per il quale i nuovi valori devono essere aggiunti',
	'LBL_ADD_PICKLIST_VALUE':'Prego fornire almeno un nuovo valore da aggiungere',
	'LBL_NO_VALUES_TO_DELETE':'nessun valore da eliminare',
	'SAME_GROUPS':'Si devono selezionare i record negli stessi gruppi per l\'unione',
	'ATLEAST_TWO':'Selezionare almeno due record per l\'unione',
	'MAX_THREE':'\u00E8 consentito selezionare al massimo tre record',
	'MAX_RECORDS_EXCEEDED': 'You have exceeded the maximum amount of selectable records',
	'MAX_RECORDS' :'\u00E8 consentito selezionare al massimo quattro record',
	'CON_MANDATORY' :'Selezionare il campo obbligatorio Cognome',
	'LE_MANDATORY':'Selezionare i campi obbligatori Cognome e Ditta',
	'ACC_MANDATORY' :'Selezionare il campo obbligatorio Nome Azienda',
	'PRO_MANDATORY' :'Selezionare il campo obbligatorio Nome Prodotto',
	'TIC_MANDATORY' :'Selezionare il campo obbligatorio Titolo Ticket',
	'POTEN_MANDATORY':'Selezionare il campo obbligatorio Nome Opportunit\u00E0',
	'VEN_MANDATORY':'Selezionare il campo obbligatorio Nome Fornitore',
	'DEL_MANDATORY':'Non ti \u00E8 consentito eliminare i campi obbligatori',
	'MSG_CHANGE_CURRENCY_REVISE_UNIT_PRICE':'Il prezzo unitario di tutti gli elementi selezionati sar\u00E0 aggiornato in base al tasso di cambio attuale. Sei sicuro?',

	'Select_one_record_as_parent_record' :'Seleziona un record come rcord relazionato',
	'RECURRING_FREQUENCY_NOT_PROVIDED' :'Frequenza periodica non fornita',
	'RECURRING_FREQNECY_NOT_ENABLED' :'Frequenza periodica \u00E8 fornita, ma non abilitata',

	'NO_SPECIAL_CHARS_DOCS':'Caratteri Speciali come apici, backslash, +, % e ? non sono consentiti',
	'FOLDER_NAME_TOO_LONG':'Nome Cartella troppo lungo. Prova ancora!',
	'FOLDERNAME_EMPTY':'Nome Cartella non pu\u00F2 essere vuoto',
	'DUPLICATE_FOLDER_NAME':'Si \u00E8 provato a duplicare un nome du una cartella gi\u00E0 esistente. Prego prova ancora !',
	'FOLDER_DESCRIPTION_TOO_LONG':'Descrizione Cartella troppo lunga. Prova ancora!',
	'NOT_PERMITTED':'Non ti \u00E8 permesso eseguire questa operazione.',

	'ALL_FILTER_CREATION_DENIED':'Impossibile creare una CustomView usando il nome "Tutto", prova ad usare un nome diverso',
	'OPERATION_DENIED':'Operazione non eseguibile',
	'EMAIL_CHECK_MSG':'Disabilita accesso al Portale per salvare l\'email come campo vuoto',
	'IS_PARENT':'Questo Prodotto ha sotto prodotti, Non ti \u00E8 consentito scegliere una relazione per questo prodotto',

	'PICKLIST_CANNOT_BE_EMPTY':'La lista non pu&ograve; essere vuota',
	'DUPLICATE_VALUES_FOUND':'Trovati Valori Duplicati',
	'LBL_NO_ROLES_SELECTED' :'Non \u00E8 stato selezionato alcun ruolo, continuare ugualmente?',
	'LBL_DUPLICATE_FOUND':'Trovate voci Duplicate per questo valore',
	'LBL_CANNOT_HAVE_EMPTY_VALUE' :'Impossibile sostituire con valore vuoto, per rimuovere il valore usa l\'opzione Elimina.',
	'LBL_DUPLICATE_VALUE_EXISTS':'Valore duplicato esistente',
	'LBL_WANT_TO_DELETE':'Questo eliminer\u00E0 i valori selezionati dalla picklist per tutti i ruoli. Sicuro di voler continuare?',
	'LBL_DELETE_ALL_WARNING':'Deve avere almeno un valore per la picklist',
	'LBL_PLEASE_CHANGE_REPLACEMENT':'prego cambiare il valore di sostituzione; \u00E8 anche selezionato per l\'eliminazione',
	'BLOCK_NAME_CANNOT_BE_BLANK':'Nome Blocco non pu\u00F2 essere vuoto',
	'ARE_YOU_SURE_YOU_WANT_TO_DELETE':'Sicuro di volerlo eliminare ?',
	'ARE_YOU_SURE_YOU_WANT_TO_DELETE_EXACT_DUPLICATE': 'Are you sure you want to Delete All Exact record duplicates?',
	'PLEASE_MOVE_THE_FIELDS_TO_ANOTHER_BLOCK' :'Prego, spostare il campo in un altro blocco',
	'ARE_YOU_SURE_YOU_WANT_TO_DELETE_BLOCK':'Sicuro di volerl eliminare il blocco ?',
	'LABEL_CANNOT_NOT_EMPTY':'Etichetta non pu\u00F2 essere Vuota',
	'LBL_TYPEALERT_1':'Spiacente, non si pu\u00F2 mappare',
	'LBL_WITH' :'con',
	'LBL_TYPEALERT_2' :'tipo dato. Per favore mappa gli stessi tipi di dato.',
	'LBL_LENGTHALERT':'Spiacenti, non \u00E8 possibile mappare i campi con diversi caratteri. Per favore mappa i dati con gli stessi o pi\u00F9 caratteri.',
	'LBL_DECIMALALERT':'Spiacenti, non \u00E8 possibile mappare i campi con diversi decimali. Per favore mappa i dati con gli stessi o pi\u00F9 decimali.',
	'PICKLIST2PICKLISTALERT': 'Please make sure both picklists share the same values',
	'PICKLIST2TEXTALERT': 'Please make sure the destination text field can hold the longest picklist value',
	'FIELD_IS_MANDATORY' :'Campo Obbligatorio',
	'FIELD_IS_ACTIVE':'Campo disponibile per l\'uso',
	'FIELD_IN_QCREATE':'Presente in Creazione Veloce',
	'FIELD_IS_MASSEDITABLE':'Disponibile per il Mass Edit',

	'IS_MANDATORY_FIELD':'\u00E8 un Campo Obbligatorio',
	'CLOSEDATE_CANNOT_BE_EMPTY':'La data dichiusura non pu&ograve; essere vuota',
	'AMOUNT_CANNOT_BE_EMPTY':'Quantit\u00E0 non pu\u00F2 essere Vuota',
	'ARE_YOU_SURE':'Sei sicuro di voler cancellare?',
	'LABEL_ALREADY_EXISTS' :'Etichetta gi\u00E0 presente. Prego inserire una nome diverso',
	'LENGTH_OUT_OF_RANGE':'Lunghezza del blocco deve essere inferiore a 50 caratteri',
	'LBL_SELECT_ONE_FILE':'Prego selezionare almeno un File',
	'LBL_UNABLE_TO_ADD_FOLDER':'Imposibile aggiunger cartella. Prego prova ancora.',
	'LBL_ARE_YOU_SURE_YOU_WANT_TO_DELETE_FOLDER' :'Sicuro di voler eliminare la cartella?',
	'LBL_ERROR_WHILE_DELETING_FOLDER':'Errore mentre si eliminava la cartella. Prego prova ancora.',
	'LBL_FILE_CAN_BE_DOWNLOAD':'File \u00E8 disponibile per il download',
	'LBL_DOCUMENT_LOST_INTEGRITY' :'Questi Documenti non sono disponibili. Saranno marcati come Inattivi',
	'LBL_DOCUMENT_NOT_AVAILABLE':'Questo Documento non \u00E8 disponibile per il Download',
	'LBL_FOLDER_SHOULD_BE_EMPTY':'La Cartella dovrebbe essere vuota per rimuoverla!',
	'LBL_PLEASE_SELECT_FILE_TO_UPLOAD' :'Prego selezionare il File da caricare.',
	'LBL_ARE_YOU_SURE_TO_MOVE_TO':'Sicuro di voler spostare i file in',
	'LBL_FOLDER':' cartella',
	'LBL_UNABLE_TO_UPDATE':'Impossibile Aggiornare! Prego prova ancora.',
	'LBL_BLANK_REPLACEMENT':'Non \u00E8 possibile selezionare un valore vuoto per la sostituzione',
	'LBL_IMAGE_DELETED' :'Immagine Eliminata',
	'ERR_FIELD_SELECTION':'Qualche errore nel campo selezionato',
	'NO_LINE_ITEM_SELECTED':'Nessuna riga \u00E8 stata selezioanta. Prego selezionare almeno una riga.',
	'LINE_ITEM':'Riga',
	'LIST_PRICE':'Listino',

	'LBL_PRINT_EMAIL':'Stampa',
	'LBL_DELETE_EMAIL':'Elimina',
	'LBL_DOWNLOAD_ATTACHMENTS' :'Download Allegati',
	'LBL_QUALIFY_EMAIL':'Qualifica',
	'LBL_FORWARD_EMAIL':'Inoltra',
	'LBL_REPLY_TO_SENDER' :'Rispondi al mittente',
	'LBL_REPLY_TO_ALL':'Rispondi a tutti',

	'LBL_WIDGET_HIDDEN':'Widget Nascosto',
	'LBL_RESTORE_FROM_PREFERENCES' :'Puoi Ripristinarlo dalle tue preferenze',
	'ERR_HIDING' :'Errore mentre si nascondeva il widget',
	'MSG_TRY_AGAIN' :'Prego prova ancora',

	'MSG_ENABLE_SINGLEPANE_VIEW':'Vita a Pannello Singolo Abilitata',
	'MSG_DISABLE_SINGLEPANE_VIEW':'Vita a Pannello Singolo Disabilitata',

	'MSG_FTP_BACKUP_DISABLED':'FTP Backup Disabilitato',
	'MSG_LOCAL_BACKUP_DISABLED' :'Backup Locale Disabilitato',
	'MSG_FTP_BACKUP_ENABLED':'FTP Backup Abilitato',
	'MSG_LOCAL_BACKUP_ENABLED':'Backup Locale Abilitato',
	'MSG_CONFIRM_PATH':'conferma con i dettagli del percorso',
	'MSG_CONFIRM_FTP_DETAILS' :'conferma con i dettagli FTP',

	'START_PERIOD_END_PERIOD_CANNOT_BE_EMPTY':'Periodo Iniziale o Finale non pu\u00F2 essere vuoto',

	'LBL_ADD':'Aggiungi',
	'Module':'Modulo',
	'DashBoard' :'Cruscotto',
	'RSS':'RSS',
	'Default':'Default',
	'Notebook':'Appunti',
	'ReportCharts': 'Report Charts',
	'CustomWidget': 'Aggregate Filter',
	'SPECIAL_CHARS' :'\\ / < > + \' "',

	'BETWEEN':'durante',
	'BEFORE':'prima',
	'AFTER':'dopo',
	'ERROR_DELETING_TRY_AGAIN':'Errore durante la cancellazione. Per favore riprova',
	'LBL_ENTER_WINDOW_TITLE':'Per favore inserire il titolo della finestra',
	'LBL_SELECT_ONLY_FIELDS':'Per favore scegliere solo due campi.',
	'LBL_ENTER_RSS_URL':'Per favore inserire l\'URL dell\'RSS',
	'LBL_ADD_HOME_WIDGET':'Impossibile aggiungere il widget! Per favore riprova',
	'LBL_DEFAULT_VALUE_FOR_THIS_FIELD':'Valore predefinito per questo campo',
	'RECIPIENTS_CANNOT_BE_EMPTY' :'Il campo selezionato nn pui essere vuoto',
	'VALID_SCANNER_NAME' :'Prego selezionare un nome valido per lo scanner (solo numeri e lettere)',
	'ERR_SAME_SOURCE_AND_TARGET' :'Campo di origine e destinazione non possono essere uguali',
	'ERR_ATLEAST_ONE_VALUE_FOR' :'Devi selezionare almeno un valore',
	'ERR_SELECT_MODULE_FOR_DEPENDENCY' :'Selezionare un modulo a cui aggiungere una dipendenza',

	'LBL_SIZE_SHOULDNOTBE_GREATER':'La dimensione del file non deve essere superiore a', //added for upload error message
	'LBL_MAX_SIZE':'La dimensione massima di un upload e', //added for display file size limit
	'LBL_FILESIZEIN_MB':'MB', // added to show filesize limit in MB
	'LBL_FILESIZEIN_KB':'KB', // added to show filesize limit in KB
	'LBL_FILESIZEIN_B':'B', // added to show filesize limit in B
	//Contexual help page
	'LBL_HELP_TITLE' :'Aiuto',
	'LBL_WIKI_TITLE' :'Manuali',
	'LBL_FAQ_TITLE'   :'FAQ',
	'LBL_VIDEO_TITLE' :'Video',
	'LBL_CLOSE_TITLE' :'Chiudi',
	'LBL_SELECT':'Seleziona Widget predefinito da visualizzare',

	'ERR_SELECT_ATLEAST_ONE_MERGE_CRITERIA_FIELD' :'Selezionare almeno un criterio di unione',
	'ERR_PLEASE_MAP_MANDATORY_FIELDS' :'Prego mappare i seguenti campi obbligatori',
	'ERR_MAP_NAME_ALREADY_EXISTS' :'Nome della mappatura gia in uso. Scegliere un altro nome',
	'ERR_MAP_NAME_CANNOT_BE_EMPTY' :'Il nome della mappatura non puo essere vuoto',
	'ERR_FIELDS_MAPPED_MORE_THAN_ONCE' :'Il seguente campo viene mappato piu volte. Verificare la mappatura.',
	'LBL_MERGE_SHOULDHAVE_INFO' : 'Inserire almeno un Campo su cui effettuare il controllo',
	'MAP_NAME_EXISTS' : 'Questa mappa esiste gi&agrave;. Vuoi sovrascrivere?',
	'MAP_DELETED_INFO' : 'Questa mappa &egrave; stata cancellata. Non puoi utilizzarla nuovamente',

	//error messages for lead conversion
	'ERR_SELECT_EITHER':'Selezionare se si intende convertire in Lead in Azienda o in Contatto',
	'ERR_SELECT_ACCOUNT':'Selezionare Azienda per procedere',
	'ERR_SELECT_CONTACT':'Selezionare Contatto per procedere',
	'ERR_MANDATORY_FIELD_VALUE':'Mancano alcuni valori nei campi obbligatori',
	'ERR_POTENTIAL_AMOUNT':'La quantita potenziale deve essere un numero',
	'ERR_EMAILID':'Inserire un Email ID valido',
	'ERR_TRANSFER_TO_ACC':'Bisognerebbe selezionare una Azienda per trasferire i relativi record',
	'ERR_TRANSFER_TO_CON':'Bisognerebbe selezionare un Contatto per trasferire i relativi record',
	'SURE_TO_DELETE_CUSTOM_MAP':'Sei sicuro di voler eliminare la mappatura per questo campo?',
	'LBL_CLOSE_DATE':'Data Chiusura',
	'LBL_EMAIL':'Email',
	'MORE_THAN_500' :'Hai selezionato piu di 500 record. Questa operazione richiedera tempo. Sei sicuro di voler procedere?',
	'LBL_MAPPEDALERT':'Campo gi\u00E0 mappato',
	'LBL_REPORT_NAME': 'Please enter a name for the new report.',
	'LBL_REPORT_NAME_ERROR': 'You must give a new name to the report.',
	'LBL_IS' : 'is',
	'LBL_CONTAINS': 'contains',
	'LBL_DOES_NOT_CONTAIN' : 'does not contain',
	'LBL_STARTS_WITH' : 'starts with',
	'LBL_ENDS_WITH' : 'ends with',
	'LBL_HAS_CHANGED' : 'has changed',
	'LBL_HAS_CHANGED_TO' : 'has changed to',
	'LBL_WAS' : 'was',
	'LBL_MONTHDAY' : 'month-day',
	'LBL_IS_EMPTY': 'is empty',
	'LBL_IS_NOT_EMPTY' : 'is not empty',
	'LBL_EQUAL_TO' : 'equal to',
	'LBL_LESS_THAN' : 'less than',
	'LBL_GREATER_THAN' : 'greater than',
	'LBL_DOEST_NOT_EQUAL' : 'does not equal',
	'LBL_LESS_THAN_OR_EQUAL_TO' : 'less than or equal to',
	'LBL_GREATER_THAN_OR_EQUAL_TO' : 'greater than or equal to',
	'LBL_IS_NOT' : 'is not',
	'LBL_BETWEEN' : 'between',
	'LBL_BEFORE' : 'before',
	'LBL_AFTER' : 'after',
	'LBL_IS_TODAY' : 'is today',
	'LBL_LESS_THAN_DAYS_AGO' : 'less than days ago',
	'LBL_MORE_THAN_DAYS_AGO' : 'more than days ago',
	'LBL_IN_LESS_THAN' : 'in less than',
	'LBL_IN_MORE_THAN' : 'in more than',
	'LBL_DAYS_AGO' : 'days ago',
	'LBL_DAYS_LATER' : 'days later',
	'LBL_LESS_THAN_HOURS_BEFORE' : 'less than hours before',
	'LBL_LESS_THAN_HOURS_LATER' : 'less than hours later',
	'LBL_MORE_THAN_HOURS_BEFORE' : 'more than hours before',
	'LBL_MORE_THAN_HOURS_LATER' : 'more than hours later',
	'LBL_EXISTS' : 'exists',
	'MAXIMUM_OF_MODULES_PERMITTED' : 'You have reached the maximum of modules that are permitted.',
	'ONLY_ONE_MODULE_PERMITTED_FOR_REPORT' : 'You can select only one related module for this type of report',
	'MUST_SELECT_ONE_MODULE_FOR_REPORT' : 'You must select one related module for this type of report',
	'LBL_NEW_CONDITION' : 'New Condition',
	'LBL_NEW_CONDITION_GROUP_BUTTON_LABEL' : 'Nuovo Gruppo di Condizioni',
	'WF_UPDATE_MAP_ERROR' : '**ERROR**: This task uses a field that does not exist: ',
	'WF_UPDATE_MAP_ERROR_INFO' : 'The task will load with INCORRECT settings to permit you to fix it. The values shown are NOT CORRECT!!',
	'MoveUp' : 'Move Up',
	'MoveDown' : 'Move Down',
	'Products' : 'Products',
	'Services' : 'Services',
	'LBL_Hide' : 'Nascondi',
	'LBL_Show' : 'Mostra',
	'ERR_INVALID_DATE_FORMAT' : 'Il formato della data deve essere: aaaa-mm-gg',
	'ERR_INVALID_MONTH' : 'Prego inserire un mese valido.',
	'ERR_INVALID_DAY' : 'Prego inserire un giorno valido.',
	'ERR_INVALID_YEAR' : 'Prego inserire un anno in 4 cifre.',
	'ERR_INVALID_DATE' : 'Prego inserire una data valida.',
	'ERR_INVALID_HOUR' : 'Prego inserire un`ora valida.',
	'ERR_INVALID_TIME' : 'Prego inserire un tempo valido.',
	'ERR_EMAIL_WITH_NO_SUBJECT' : 'You did not specify a subject for this email. If you would like to provide one, please type it now',
	'EMAIL_WITH_NO_SUBJECT' : '(no-Subject)',
	'INTEGERVALS':'Sono permessi soltanto valori Integer',
	'JSLBL_Delete': 'Cancella',
	'JSLBL_Edit': 'Edit',
	'JSLBL_Loading': 'Loading',
	'JSLBL_ATTACHMENT_NOT_DELETED': 'Attachment could not be deleted',
	'JSLBL_FILEUPLOAD_LIMIT_EXCEEDED': 'File Upload Limit exceeded!!',
	'JSLBL_CANCEL': 'Cancella',
	'JSLBL_SAVEAS': 'Save as',
	'JSLBL_SAVE': 'Salva',
	'JSLBL_PREVIOUS': 'Precedente',
	'JSLBL_NEXT': 'Prossimo',
	'JSLBL_CURRENT': 'Step Attuale:',
	'JSLBL_PAGINATION': 'Paginazione',
	'JSLBL_FINISH': 'Fine',
	'SHOWING' : 'Mostrando',
	'OF' : 'di',
	'ERR_Massedit' : 'Errore di Mass Edit',
	'ProcessFINISHED' : 'Processo Terminato',
	'duplicatednotallowed' : 'Non sono permessi Moduli Duplicati',
	'HAS_THIS_AS_NTH_CHILD' : 'ha questo record come figlio unico',
	'Okay': 'Okay',
	'Failed': 'Failed',
	'Warning': 'Warning',
	'Copied': 'Copied',
	'ERR_PASSWORD_NOT_CHANGED': 'La vecchia e la nuova password sono le stesse. Utilizza una password diversa.',
	'ERR_ENTER_OLD_PASSWORD': 'Inserisci la Vecchia Password.',
	'ERR_ENTER_NEW_PASSWORD': 'Inserisci la Nuova Password.',
	'PASSWORD REQUIREMENTS NOT MET': 'PASSWORD REQUIREMENTS NOT MET',
	'Old password is incorrect': 'La vecchia password non è corretta!',
	'LBL_OLD_PASSWORD': 'Vecchia Password',
	'LBL_NEW_PASSWORD': 'Nuova Password',
	'PASSWORD REQUIREMENTS': 'Requisiti Password',
	'REQUIRED': 'Obbligatori',
	'Min. 8 characters': 'Minimo 8 caratteri',
	'Contains3of4': 'LA PASSWORD CONTIENE ALMENO UNO DI QUESTI 3 GRUPPI DI CARATTERI',
	'Min. 1 uppercase': 'Minimo una lettera maiuscola',
	'Min. 1 lowercase': 'Minimo una lettera minuscola',
	'Min. 1 number': 'Minimo un numero',
	'Min. 1 special character': 'Minimo un carattere speciale ! ? , ; - @ #',
	'LBL_CHANGE_PASSWORD': 'Cambia Password',
	'ACT_UNIT_PRICE_MISMATCH': 'Il prezzo effettivo per questa valuta dovrebbe essere uguale al prezzo unitario, ma questo non è il caso di questo prodotto o servizio',
	'LBL_SHOWING': 'Visualizzando Record ',
	'LBL_RECORDS': ' di ',
	'LNK_DELETE': 'canc',
	'LNK_EDIT': 'modifica',
	'LNK_EDIT_ACTION': 'Modifica',
	'LNK_DELETE_ACTION': 'Elimina',
	'LBL_MODIFIED': 'Modified',
	'LBL_CREATE': 'Create a',
	'LBL_IMPORT': 'Import',
	'LBL_NO_DATA': 'No Data Found',
	'filterApplied': 'Filter applied',
	'QuickView': 'Quick view',
	'Restore': 'Restore',
	'LBL_SUCCESS': 'Success',
	'LBL_CREATED_SUCCESS': 'Created successfully',
	'LBL_SELECT_COLUMNS': 'Select columns to show in grid',
};
