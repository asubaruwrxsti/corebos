<?php
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
 ********************************************************************************/

$mod_strings = array (
	'Utilities' => 'Utilità',
	'SINGLE_Utilities' => 'Utilità',
	// Translations for JS (please use the prefix JSLBL in key)
	'JSLBL_Saving_And_Verifying' => 'Salvataggio & Verifica',
	'JSLBL_PASSWORD_CANNOT_BE_EMPTY'=>'Password non può essere vuota',
	'JSLBL_SERVERNAME_CANNOT_BE_EMPTY'=>'Nome Server non può essere vuoto',
	'JSLBL_USERNAME_CANNOT_BE_EMPTY'=>'Nome Utente non può essere vuoto',
	'JSLBL_ERROR' => 'Errore',

	// General translations
	'SUCCESSFUL_REGISTRATION_TITLE' => 'Autentificazione Corretta',
	'SUCCESSFUL_REGISTRATION_MESSAGE' => 'Hai stabilito correttamente le credenziali di autenticazione con %s. Ora puoi iniziare a utilizzare la funzionalità.',
	'UNSUCCESSFUL_REGISTRATION_TITLE' => 'Autenticazione Non Corretta',
	'UNSUCCESSFUL_REGISTRATION_MESSAGE' => 'NON hai stabilito le credenziali di autenticazione con %s. Dovrai ripetere il processo se vuoi iniziare a utilizzare la funzionalità.',
	'IntegrationAuthorizationClick' => 'Clicca qui per stabilire Autorizzazione %s',
	'HubSpot Activation' => 'Attivazione HubSpot',
	'hubspot_active' => 'Integrazione Attivo',
	'hubspot_mssync' => 'Master/Slave Sincronizzazione Attiva',
	'hubspot_clientId' => 'ID Cliente HubSpot',
	'hubspot_oauthclientId' => 'oAuth Cliente ID',
	'hubspot_clientSecret' => 'Chiave API Cliente o oAuth Secret',
	'hubspot_apiurl' => 'API URL',
	'hubspot_pollFrequency' => 'Frequenza Poll HubSpot',
	'hubspot_relateDealWith' => 'Offerte Correlate con',
	'GContacts Activation' => 'Attivazione Contatti Google',
	'_active' => 'Integrazione Attivo',
	'_apiurl' => 'API URL',
	'_clientId' => 'ID cliente',
	'_clientSecret' => 'Chiave API Cliente',
	'2FA Activation' => 'Attivazione Autenticazione Due Fattori',
	'GoTo2FAActivation' => 'Attivazione Due Fattori',
	'2FA Secret Code' => 'Codice Segreto 2DF',
	'Available Integrations' => 'Integrazioni Disponibili',
	'Zendesk Activation' => 'Attivazione Zendesk',
	'zendesk_active' => 'Integrazione Attivo',
	'zendesk_apiurl' => 'Dominio API',
	'zendesk_accessCode' => 'Token Accesso Zendesk',
	'zendesk_username' => 'Nome Utente Zendesk',
	'Whatsapp Activation' => 'Attivazione Whatsapp',
	'whatsapp_sid' => 'Whatsapp SID',
	'whatsapp_token' => 'Token Whatsapp',
	'whatsapp_senderphone'=> 'Telefono Mittente Whatsapp',
	'SendGrid Activation' => 'SendGrid Activation',
	'TransEmail_title' => 'Configurazione per Email Transazionale',
	'TransEmail_subtitle' => 'Sostituisce il server di posta in uscita',
	'MktEmail_title' => 'Configurazione per Email Marketing',
	'MktEmail_subtitle' => 'Solo per messaggi, e-mail programmate e processi appositamente programmati',
	'LBL_CONFIG_INCOMING_MAIL_SERVER' => 'Configure Incoming Mail Server',
	'LBL_SELECT_SERVER_TYPE' => 'Seleziona Tipo Server',
	'LBL_CONFIG_OUTGOING_MAIL_SERVER' => 'Configura server di posta in uscita',
	'LBL_USER_SMTP_CONFIG' => 'Configurazione IMAP/SMTP Utente',
	'LBL_IC_SUCCESS_CONFIG_VALIDATION' => 'Configurazione Server Mail Arrivo Salvata e Convalidata',
	'LBL_IC_WARNING_CONFIG_VALIDATION' => 'Configurazione Server Mail Arrivo Non Convalidata',
	'LBL_IC_CONFIG_VALIDATION_FAIL' => 'Convalida Configurazione Server Mail Arrivo Non Riuscita',
	'LBL_OG_SUCCESS_CONFIG_VALIDATION' => 'Configurazione Server Mail Uscita Salvata e Convalidata',
	'LBL_OG_WARNING_CONFIG_VALIDATION' => 'Configurazione Server Mail Uscita Salvato e Convalidato',
	'LBL_OG_CONFIG_VALIDATION_FAIL' => 'Convalida Configurazione Server Mail Uscita Non Riuscita',
	'LBL_ERROR' => 'Errore',
	'GMP Activation' => 'Attivazione Protocollo Misurazione Google',
	'gmp_gid' => 'ID analisi Google Universal',
	'gmp_gversion' => 'Versione Protocollo Misurazione',
	'gmp_deacterror' => 'I Flussi di Lavoro utilizzano questa attività esistono!! Si prega di eliminarli prima di disattivarli.',
	'Record Versioning' => 'Record Versioni',
	'Record Versioning_Desc' => 'Aggiungi versioni ai tuoi record',
	'GoTo2FAActivation_Desc' => 'Aggiungi un\'autenticazione a due fattori ai tuoi utenti',
	'GVEditable' => 'Il modulo Global Variable deve essere modificabile per attivare questa funzione.',
	'HubSpot Activation_Desc' => 'Sincronizza le tue informazioni con HubSpot',
	'SMTP Configuration_Desc' => 'Configura account email in entrata e uscita per i tuoi utenti',
	'Zendesk Activation_Desc' => 'Sincronizza le tue informazioni con ZenDesk',
	'Whatsapp Activation_Desc' => 'Invia notificazioni ai tuoi contatti usando Whatsapp',
	'SendGrid Activation_Desc' => 'Invia mail usando SendGrid',
	'GMP Activation_Desc' => 'Invia le tue vendite a Google Analytics',
	'Elasticsearch_Desc' => 'Crea Index di ElasticSearch per un modulo',
	'ElasticSearch Activation' => 'Attivazione ElasticSearch',
	'LogAll Activation' => 'Registra Tutto',
	'LogAll_Desc' => 'Registra tutti eventi e modifiche ai dati si verificano applicazione nella coda dei messaggi.',
	'LogAll_Active' => 'Attualmente registrando tutto.',
	'LogAll_Inactive' => 'Attualmente registrando nulla.',
	'Login Sync Activation' => 'Sincronizzazione Sistema Accesso',
	'Login_Synic Desc' => 'Accedi automaticamente a un altro servizio web coreBOS road runner quando accedi a questo.',
	'cbInstalls' => 'coreBOS Installa',
	'PrivateKeyNotSet' => 'Nessuna Chiave Privata è impostata',
	'PrivateKeyIsSet' => 'Chiave Privata è impostata',
	'setPrivateKey' => 'Imposta Chiave Privata Condivisa',
	'noServerSelected' => 'Nessun server selezionato da aggiornare',
	'noServerValue' => 'Server Selezionato è vuoto',
	'Map_Query' => 'Usare Query della Mappa',
	'choosemap' => 'Scegliere Mappa',
	'sel_fields_es' => 'Seleziona Campi per il Mapping di Elasticsearch',
	'Analyzed' => 'Analizzati',
	'Missing_GlobalVar' => 'Variabili Globali IP ElasticSearch mancante',
	'Denormalization Activation' => 'Denormalizza Modulo',
	'Denormalize_Desc' => 'Denormalizza il modulo che contiene molti record',
	'SelectDenormalize' => 'Seleziona Modulo da Denormalizzare',
	'denormalize response' => 'Denormalizzare risposta',
	'Woocommerce Activation' => 'Attivazione Woocommerce',
	'Woocommerce Desc' => 'Sincronizza informazioni coreBOS-Woocommerce',
	'wccs' => 'Segreto Consumatore',
	'wcck' => 'Chiave Consumatore',
	'wcurl'=> 'URL WordPress',
	'wcsct'=> 'Segreto Notifica WordPress',
	'OneSignal Activation' => 'Attivazione OneSignal',
	'OneSignal Desc' => 'Invia Notifica utilizzando OneSignal',
	'onesignal_appid' => 'ID App',
	'onesignal_apikey' => 'Chiave API',
	'SAML Activation' => 'Attivazione SAML',
	'SAML Activation_Desc' => 'Accedi a tutti gli utenti da un provider di identità centrale',
	'SAML SP' => 'Fornitore Servizi',
	'SAML IP' => 'Provider Identità',
	'SAML EID' => 'Entità ID',
	'SAML NID' => 'Nome ID Formato',
	'SAML ACS' => 'Servizio Consumatori Affermazione',
	'SAML SSO' => 'Servizio Accesso Unico',
	'SAML SLO' => 'Servizio Disconnessione Singola',
	'SAML x509' => 'x509 Certificato',
	'SAML WS' => 'API Servizio Web',
	'SAML RWURL' => 'URL Risposta Inoltro 1',
	'SAML RWURL2' => 'URL Risposta Inoltro 2',
	'SAML RWURL3' => 'URL Risposta Inoltro 3',
	'LBL_API_URL' => 'SendGrid API URL',
	'cache_select_adapter_type' => 'Seleziona tipo adattatore',
	'cache_adapter_memory' => 'Memoria',
	'cache_adapter_redis' => 'Redis',
	'cache_adapter_memcached' => 'Memcached',
	'cache_ip' => 'Server IP',
	'cache_port' => 'Servizio Porto',
	'cache_ip_required' => 'È richiesto IP server cache',
	'cache_port_required' => 'Il servizio cache PORT è obbligatorio',
	'Cache Activation' => 'Attivazione livello cache',
	'Cache Activation_Desc' => 'Utilizza un livello cache implementato per tre adattatori: Memoria, Redis, Memcached',
	'DENORMALIZED_LIST' => 'Lista denormalizzato',
	'Select' => 'Seleziona',
	'SAVE_TO_UNDO' => 'Salva da annullare',
	'UNDO_DENORMALIZE' => 'Annulla Denormalizza',
	'DENORMALIZE' => 'Denormalizzare',
	'DENORMALIZED' => 'Denormalizzato',
	'SELECT_OPERATION' => 'Seleziona Operazione',
	'Stripe Payment Activation' => 'Attivazione Pagamento a Strisce',
	'StripePayment_Desc' => 'Configurare Immissione Pagamento Stripe',
	'stripe_Key' => 'Chiave API Stripe',
	'Mautic Activation' => 'Mautic Activation',
	'Mautic Activation_Desc' => 'Mautic Configuration',
	'mautic_baseurl' => 'Base URL',
	'mautic_version' => 'Version',
	'mautic_version_oauth2' => 'Oauth2',
	'mautic_clientkey' => 'Client Key',
	'mautic_clientsecret' => 'Client Secret',
	'mautic_callback' => 'Callback',
	'mautic_sync_with_contacts' => 'Sync Mautic Leads with Contacts',
	'mautic_version_basicauth' => 'BasicAuth',
	'mautic_username' => 'Username',
	'mautic_password' => 'Password',
	'mautic_sync_with_accounts' => 'Sync Mautic Leads with Accounts',
	'ClickHouse_Desc' => 'Configure ClickHouse',
	'clickhouse_host' => 'Host',
	'clickhouse_port' => 'Port',
	'clickhouse_username' => 'Username',
	'clickhouse_password' => 'Password',
	'clickhouse_active' => 'Active',
	'clickhouse_database' => 'Database',
	'clickhouse_query' => 'ClickHouse Query (limited to 100 rows)',
	'clickhouse_webhook_secret' => 'Webhook Secret',
	'clickhouse_tableexists' => 'A web service table with that name already exists.',
	'clickhouse_upserterror' => 'Error with clickhouse webservice upsert query.',
	'mautic_webhook_secret' => 'Webhook Secret',
	'Facebook Activation' => 'Facebook Activation',
	'Facebook Activation_Desc' => 'Facebook Configuration',
	'facebook_hub_verification_token' => 'Hub Verification Code',
	'facebook_access_token' => 'Access Token',
	'facebook_destination_module' => 'Destination Module',
	'Unable2Connect' => 'Unable to connect',
	'Able2Connect' => 'Able to connect',
);
?>
