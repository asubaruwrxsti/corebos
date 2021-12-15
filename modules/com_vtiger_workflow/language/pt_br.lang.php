<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger. All Rights Reserved.
 * Contributor(s): Valmir Carlos Trindade/Translate to Brazilian Portuguese| 03/03/2012 |Curitiba/Paraná/Brasil.|www.ttcasolucoes.com.br
 * Contributor(s): Ranieri Slemer/Translate to Brazilian Portuguese| 23/09/2021 |Sao Paulo/SP/Brasil.|www.ecrmweb.com.br
  ************************************************************************************/
$mod_strings = array(
'com_vtiger_workflow' => 'Workflows',
'SINGLE_com_vtiger_workflow' => 'Workflow',
'VTEmailTask' => 'Enviar e-mail',
'VTEntityMethodTask' => 'Invocar função customizada',
'VTCreateTodoTask' => 'Criar compromisso',
'VTCreateEventTask' => 'Criar evento',
'VTSMSTask' => 'Tarefa SMS',
'LBL_EDIT_TASK'=>'Editar tarefa',
'LBL_EDIT_TASK_TITLE'=>'Editar uma tarefa existente ou criar nova',
'LBL_EDIT_WORKFLOW'=>'Editar Workflow',
'LBL_EDIT_WORKFLOW_TITLE'=>'Editar um workflow existente ou criar novo',
'LBL_FROM_TEMPLATE'=>'Do modelo',
'LBL_NEW_WORKFLOW'=>'Novo workflow',
'LBL_WF_MANUAL_WARNING'=>'You are changing the title of a manual trigger point workflow. If it is used in a web service call, you may break it.',
'LBL_NEW_TEMPLATE'=>'Salvar como modelo',
'LBL_CREATE_WORKFLOW_FOR'=>'Criar um workflow para',
'LBL_FOR_MODULE'=>'Para módulo',
'LBL_CHOOSE_A_TEMPLATE'=>'Escolher um modelo',
'LBL_VALIDATION_MISSING_MANDATORY_FIELDS'=>'Existe um campo obrigatório vazio.',
'LBL_VALIDATION_INVALID_DATE_RANGE'=>'A data/hora inicial é maior do que a data/hora final',
'LBL_ERROR_NO_WORKFLOW'=>'O workflow solicitado não existe',
'LBL_ERROR_NO_TASK'=>'A tarefa solicitada não existe',
'LBL_ERROR_NOT_ADMIN'=>'Acesso restrito aos usuários admin',
'LBL_CREATE_WORKFLOW'=>'Criar workflow',
'LBL_WORKFLOW_LIST'=>'Lista workflow',
'LBL_AVAILABLE_WORKLIST_LIST'=>'Workflows disponíveis',
'LBL_LOADING'=>'Carregando...',
'LBL_REEVALCONDITIONS' => 'Avaliar condições na execução',
'evaluate' => 'Validar',
'LBL_VALIDATION_ERROR'=>'Erro de validação',
'LBL_SELECT_OPTION_DOTDOTDOT'=>'Selecionar opção...',
'LBL_WORKFLOW_NOTE_CRON_CONFIG'=>'NOTA: Você deve ter um script Cron configurado para o workflow.',
'LBL_NO_TEMPLATES'=>'Nenhum modelo',
'LBL_SELECT'=>'Selecionar',
'LBL_MESSAGE'=>'Mensagem',
'LBL_SET_FIELD_VALUES'=>'Configurar valor campos',
'LBL_ADD_FIELD'=>'Adicionar campo',
'LBL_DELETE_FIELD' => 'Apagar Campo',

'LBL_USE_FIELD_VALUE_DASHDASH'=>'-- Utilizar valor campo --',
'LBL_USE_FUNCTION_DASHDASH'=>'-- Utilizar função --',
'LBL_FUNCTIONS'=>'Funções de expressão',
'Math' => 'Matemáticas',
'Date and Time' => 'Data e hora',
'Text' => 'Texto',
'Information' => 'Informação',
'Logical' => 'Lógica',
'Finance' => 'Financeiras',
'Application' => 'Applicação',
'Statistics' => 'Estatisticas',

'LBL_RAW_TEXT'=>'Texto puro',
'LBL_FIELD'=>'Campo',
'LBL_EXPRESSION'=>'Expressão',
'LBL_SET_EXPRESSION'=>'Configurar expressão',

'LBL_MANUAL'=>'Sistema. Ações em massa',
'LBL_RECORD_ACCESS_CONTROL' => 'RCA - Controle Acesso Registro',
'LBL_NEW_CONDITION_GROUP_BUTTON_LABEL'=>'Novo grupo condição',

'VTUpdateFieldsTask' => 'Atualizar campos',
'LBL_ON_DELETE'=>'Ao apagar',

'LBL_VALIDATION_DUPLICATE_FIELDNAMES' => 'O mesmo campo foi selecionado mais de uma vez.',
'LBL_VALIDATION_INVALID_FIELD_VALUES' => 'Valores de campo inválidos',
'LBL_CREATE_ENTITY_NOTE_ORDER_MATTERS' => 'Nota: As expressões serão avaliadas na ordem dos valores do campo fornecidos.
							    Portanto, certifique-se de que tenha fornecido o valor para um campo antes de utilizá-lo na expressão.',
'LBL_CREATE_ENTITY_NOTE_BUSINESSMAPS' => 'Nota: Você pode usar um Field Business Map para mapear campos de uma entidade para outra, nesse caso, as definições do mapa de negócios sobrescreverão as definidas aqui.',
'LBL_SET_VALUE' => 'Configurar valor',

'LBL_EMAIL_RECIPIENT' => 'Destinatário',
'LBL_EMAIL_CC' => 'CC',
'LBL_EMAIL_BCC' => 'CCO',
'LBL_EMAIL_SUBJECT' => 'Assunto',
'LBL_EMAIL_FROMNAME' => 'De nome',
'LBL_EMAIL_FROMEMAIL' => 'Do e-mail',
'LBL_EMAIL_REPLYTO' => 'Responder à',
'LBL_AttachmentInField' => 'Anexo no campo',
'LBL_WORKFLOW_NOTE_EVENT_TASK_TIMEZONE' => 'Nota: Toda a data, hora e informação recorrente configurada para o Evento,
													estarão relacionados com o time zone padrão, configurado no config.inc.php',

'Select Meta Variables' => 'Selecionar meta variáveis',
'Current Date' => 'Data atual',
'Current Time' => 'Hora atual',
'System Timezone' => 'Sistema fuso horário [Timezone]',
'User Timezone' => ' Fuso horário usuário [Timezone]',
'CRM Detail View URL' => 'Visualizar link do CRM',
'Portal Detail View URL' => 'Visualizar link do portal',
'Site Url' => 'Link do site',
'Portal Url' => 'Link do portal',
'groupEmailList' => 'Lista de e-mail do grupo',
'groupUsersWsIdList' => 'Group Users Web Service Id List',
'Recommended frequency for Workflow is 15 mins' => 'Frequencia remcomendada 15 mins (>= crontab)',
'Workflow'=>'Workflow',
'WORKFLOW_DELETE_CONFIRMATION' => 'Tem certeza que deseja apagar este workflow?',
'LBL_DELETE_WORKFLOW' => 'Apagar Workflow',

'VTCreateEntityTask' => 'Criar entidade',
'LBL_ENTITY_TYPE' => 'Tipo entidade',
'LBL_SELECT_ENTITY_TYPE' => '-- Selecionar tipo entidade --',
'Assigned User' => 'Usuário atribuído',
'LBL_NO_ENTITIES_FOUND' => 'Nenhuma entidade encontrada para se criar',
'LBL_PARENT_OWNER' => 'Proprietário de registro pai',
'LBL_SPECIAL_OPTIONS' => 'Opções Especiais',
'CBTagTask' => 'Adicionar/Apagar Tag',
'CBMassiveUpdateRelatedTask' => 'Atualizar registros relacionados',
'DuplicateRecords' => 'Registros duplicados',
'Add Tag' => 'Adicionar Tag',
'Delete Tag' => 'Apagar Tag',
'Tags' => 'Tags',
'ForAllUsers' => 'Para todos os usuários',
'ForCurrentUser' => 'Apenas para o usuário atual',
'CBRelateSales' => 'Relacionar produto/serviço',
'Relate Product' => 'Relacionar produto',
'Relate Service' => 'Relacionar serviço',
'Relate with AccountVendor' => 'Relacionar com conta/fornecedor',
'Relate with Contact' => 'Relacionar-se com o contato',
'CBDeleteRelatedTask' => 'Excluir registros relacionados',
'CBAssignRelatedTask' => 'Atribuir registros relacionados',
'CBSelectcbMap' => 'Selecionar mapa de negócios',
'ConvertInventoryModule' => 'Converter registros do módulo de inventário',
'ConvertInventoryModuleMessage' => 'Os mapeamentos de campos são o mapeamento de aplicativos padrão e podem ser ajustados usando mapa de negócios de mapeamento de campo.',
'CBSendMMMSGTask' => 'Enviar mensagem para Mattermost',
'Send Message To MM' => 'Enviar mensagem para Mattermost',
'VTSendMessage2MMTask' => 'Enviar mensagem para Mattermost',
'whatsappworkflowtask' => 'Enviar mensagen WhatsApp',
'Whatsapp Workflow Task' => 'Enviar mensagem WhatsApp',
'WhatsappWorkflowTask' => 'Enviar mensagem WhatsApp',
'Many to Many Relation Task' => 'Tarefa de N para N relacionamentos',
'Set Many to Many Relation' => 'Configurar N to N relacionamentos',
'NotifyOnPortalTicketCreation' => 'Notiicar Portal quando ticket criado',
'NotifyOnPortalTicketComment' => 'Notificar Portal quando ticket comentado',
'NotifyOwnerOnTicketChange' => 'Notificar proprietário quando ticket alterado',
'NotifyParentOnTicketChange' => 'Notificar envolvidos quando ticket alterado',
'LBL_EVENTNAME' => 'Nome do evento',
'LBL_DESCRIPTION' => 'Descrição',
'LBL_STATUS' => 'Status',
'LBL_TYPE' => 'Tipo',
'LBL_START_TIME' => 'Hora de início',
'LBL_START_DATE' => 'Data de início',
'LBL_END_TIME' => 'Hora final',
'LBL_END_DATE' => 'Data final',
'LBL_SET_DATE'=>'Definir data',
'LBL_AFTER' => 'Depois de',
'LBL_BEFORE' => 'Antes',
'LBL_DAYS' => 'dias',
'LBL_HOURS' => 'Hours',
'LBL_HELPDESK_SUPPORT_EMAILID'=>'E-mail suporte',
'LBL_HELPDESK_SUPPORT_NAME'=>'Nome suporte',
'LBL_ORGANIZATION_LOGO'=>'Logo da empresa',
'LBL_RUN_WORKFLOW' => 'Executar workflow',
'LBL_AT_TIME' => 'No tempo',
'LBL_HOURLY' => 'De hora em hora',
'LBL_DAILY' => 'Diariamente',
'LBL_WEEKLY' => 'Semanal',
'LBL_ON_THESE_DAYS' => 'Nesses dias',
'LBL_MONTHLY_BY_DATE' => 'Mensal por data',
'LBL_MONTHLY_BY_WEEKDAY' => 'Mensalmente por dia da semana',
'LBL_YEARLY' => 'Anual',
'LBL_MINUTES_INTERVAL'=>'Intervalo minuto',
'LBL_EVERY_MINUTEINTERVAL'=>'Cada',
'LBL_MINUTES'=>'minutos',
'LBL_SPECIFIC_DATE' => 'Na data específica',
'LBL_CHOOSE_DATE' => 'Escolha a data',
'LBL_SELECT_MONTH_AND_DAY' => 'Selecione mês e data',
'LBL_SELECTED_DATES' => 'Datas selecionadas',
'LBL_EXCEEDING_MAXIMUM_LIMIT' => 'Limite máximo excedido',
'LBL_NEXT_TRIGGER_TIME' => 'Próximo tempo de disparo em',
'UpdateInventoryProducts On Every Save' => 'Atualizar inventário de produtos',
'Send Email to user when Notifyowner is True' => 'Enviar e-mail para o usuário quando o notificar proprietário for verdadeiro',
'Send Email to user when Portal User is True' => 'Enviar e-mail para o usuário quando o usuário do portal for verdadeiro',
'Send Email to users on Potential creation' => 'Enviar e-mail para o usuário na criação de oportunidades',
'Workflow for Contact Creation or Modification' => 'Enviar e-mail para entrar em contato com o portal',
'Workflow for Ticket Created from Portal' => 'Workflow para o ticket criado a partir de portal',
'Workflow for Ticket Updated from Portal' => 'Workflow para o ticket atualizado do portal',
'Workflow for Ticket Change, not from the Portal' => 'Workflow para alteração de ticket, não do portal',
'Workflow for Events when Send Notification is True' => 'Workflow para eventos quando a notificação de envio é verdadeira',
'Workflow for Calendar Todos when Send Notification is True' => 'Workflow para tarefas de calendário quando a notificação de envio é verdadeira',
'Calculate or Update forecast amount' => 'Calcular ou atualizar o valor da previsão',
'LBL_METHOD_NAME' => 'Nome do método',
'NO_METHOD_AVAILABLE' => 'Nenhum método está disponível para este módulo.',
'LBL_URLQUERY' => 'Pesquisa GMP',
'gmp_url_explanation' => 'O módulo aplicará a configuração padrão (ID do GA, versão e ClientId), você deve colocar na consulta apenas elemnts específicos, como o tipo de hit (t). Você pode procurar parâmetros de protocolo do Google Measurement aqui: <a href="https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters"> Referência dos parâmetros do protocolo de medição </a>',
'url_query' => 'Pesquisa GMP',
'CBGMPTask' => 'Google Measurement Protocol',
'GenerateDocument'=>'Criar Documento',
'Templates'=>'Modelos',
'launchrelwf' => 'Executar workflows em atualizações relacionadas',
'LBL_WFPURPOSE' => 'Propósito',
'Run Webservice Workflow Task' => 'Rodar Web Service',
'RunWebserviceWorkflowTask' => 'Rodar Web Service',
'runwebserviceworkflowtask' => 'Rodar Web Service',
'Select IO Map' => 'Selecionar IO Map',
'Select Config Map' => 'Selecionar Configuration Map',
'CBPushNotificationTask' => 'Enviar notificação',
'pushnoturl' => 'Enviar link de notificação',
'CBQuestionMViewFunction' => 'Atualizar Materialized View',
'LBL_WHERE_TO_SAVE' => 'Onde salvar:',
'LBL_WHAT_TO_ENCODE' => 'O que codificar',
'Select Field to Save Encoded Value' => 'Selecione o campo para salvar o valor codificado',
'Select Field to Encode' => 'Selecione o campo para codificar',
'Encoding Type' => 'Tipo de codificação',
'Select Encoding Type' => 'Selecione o tipo de codificação',
'Generate Image Code' => 'Gerar código de imagem',
'Generate Image Code Workflow Task' => 'Tarefa do workflow p/gerar código da imagem',
'GenerateImageCodeWorkflowTask' => 'Tarefa do workflow p/gerar código da imagem',
'LBL_ON_RELATE' => 'Quando relaciona à',
'LBL_ON_UNRELATE' => 'Quando exclui a relacação com',
'LBL_ROW' => 'Linha',
'ERR_IncorrectFile' => 'Arquivo incorreto ou conteúdo do arquivo',
'ERR_CannotProcess' => 'Não é possível executar o workflow',
'ERR_ExpTypeUndefined' => 'Tipo de expressão indefinido',
'ERR_NoCRMIDforEvaluate' => 'Nenhum registro selecionado para o contexto da avaliação',
'EmptyForAllDateRanges' => 'Deixe em branco para TODOS os períodos.',
'LBL_SAVEBASED' => 'Salvar com base',
'LBL_TIMEBASED' => 'Baseado em tempo ou configuração',
'Record Set' => 'Conjunto de registros para ações em massa',
'Select where to get the records from' => 'Selecione de onde obter os registros',
'Launch Now' => 'Executar agora',
'Execute Expression' => 'Executar expressão',
'wfExecExpression' => 'Executar expressão',
'wdexeexpVariableHelp' => 'O valor será salvo no contexto com esse nome, se fornecido. Senão apenas a expressão será executada.',
'LBL_EXPRESSIONS' => 'Expressões',
'EXP_RULES' => 'Regras a seguir ao usar expressões',
'EXP_RULE1' => "Defina os valores dos campos de texto entre aspas simples (' ').",
'EXP_RULE2' => 'Use operadores aritméticos para realizar adição (+), subtração (-), multiplicação (*) e divisão (/). Você pode realizar essas operações entre dois ou mais campos, valores ou combinação de ambos os campos e valores.',
'EXP_RULE3' => 'Use operadores relacionais nas expressões',
'equal to' => 'igual a',
'not equal to' => 'diferetent de',
'EXP_RULE4' => 'Use valores binários para os campos da caixa de seleção: 0 para falso / não, 1 para verdadeiro / sim.',
'Select source module' => 'Selecione o módulo fonte',
'Business Question' => 'Business Question',
'Select File Type' => 'Selecione o tipo de arquivo',
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
);
?>
