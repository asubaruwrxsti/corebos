<?php
/***********************************************************
*  Module       : Import
*  Language     : ES Spanish
*  Version      : vt5.4.0
*  Created Date : 2012-02-27
*  Last change  : 2012-02-27
*  Author       : JPL TSolucio, S.L.
*  License      : MPL 1.1
***********************************************************/
$mod_strings = array (
	'Import' => 'Importar',
	'LBL_IMPORT_STEP_1' => 'Paso 1',
	'LBL_IMPORT_STEP_2' => 'Paso 2',
	'LBL_IMPORT_STEP_3' => 'Paso 3',
	'LBL_IMPORT_STEP_4' => 'Paso 4',
	'LBL_IMPORT_STEP_1_DESCRIPTION' => 'Selecciona Fichero',
	'LBL_IMPORT_STEP_2_DESCRIPTION' => 'Especifica Formato',
	'LBL_IMPORT_STEP_3_DESCRIPTION' => 'Manejo de Registros Duplicados',
	'LBL_IMPORT_STEP_4_DESCRIPTION' => 'Asigna las Columnas a Campos del Módulo',
	'Skip' => 'Ignorar',
	'Overwrite' => 'Sobrescribir',
	'Merge' => 'Combinar',
	'LBL_IMPORT_SUPPORTED_FILE_TYPES' => 'Formato(s) aceptados: .CSV, .VCF',
	'LBL_IMPORT_STEP_3_DESCRIPTION_DETAILED' => 'Selecciona esta opción para habilitar y configurar el control de duplicados',
	'LBL_CHARACTER_ENCODING' => 'Codificación de caracteres',
	'LBL_DELIMITER' => 'Delimitador:',
	'LBL_HAS_HEADER' => 'Tiene cabecera',
	'LBL_SPECIFY_MERGE_TYPE' => 'Selecciona cómo se han de gestionar los registros duplicados',
	'LBL_SELECT_MERGE_FIELDS' => 'Selecciona los campos coincidentes para encontrar duplicados',
	'LBL_SELECT_MERGE_CONDITION' => 'O selecciona una regla para decidir si el registro es un duplicado o no',
	'LBL_SKIP_CREATE' => 'Omitir creación de registros (solo actualizar)',
	'LBL_AVAILABLE_FIELDS' => 'Campos Disponibles',
	'LBL_SELECTED_FIELDS' => 'Campos Coincidentes',
	'UTF-8' => 'UTF-8',
	'ISO-8859-1' => 'ISO-8859-1',
	'comma' => ', (coma)',
	'semicolon' => '; (punto y coma)',
	'pipe' => '| (tubo)',
	'caret' => '^ (caret)',
	'tab' => '\t (tab)',
	'LBL_USE_SAVED_MAPPING' => 'Usar asignación personalizada:',
	'LBL_SAVE_AS_CUSTOM_MAPPING' => 'Guardar como asignación personalizada',
	'LBL_FILE_COLUMN_HEADER' => 'Cabecera',
	'LBL_ROW_1' => 'Fila 1',
	'LBL_CRM_FIELDS' => 'Campos CRM',
	'LBL_DEFAULT_VALUE' => 'Valor por defecto',
	'LBL_IMPORT_BUTTON_LABEL' => 'Importar',
	'LBL_TOTAL_RECORDS_IMPORTED' => 'Número total de registros importados',
	'LBL_TOTAL_RECORDS_FAILED' => 'Número total de registros descartados',
	'LBL_NUMBER_OF_RECORDS_CREATED' => 'Número de registros creados',
	'LBL_NUMBER_OF_RECORDS_UPDATED' => 'Número de registros sobreescritos',
	'LBL_NUMBER_OF_RECORDS_SKIPPED' => 'Número de registros descartados',
	'LBL_UNDO_LAST_IMPORT' => 'Deshacer última importación',
	'LBL_VIEW_LAST_IMPORTED_RECORDS' => 'Registros Importados',
	'LBL_IMPORT_MORE' => 'Importar Más',
	'LBL_FINISH_BUTTON_LABEL' => 'Terminar',
	'LBL_RESULT' => 'Resultado',
	'ERR_FILE_DOESNT_EXIST' => "Fichero no existe",
	'ERR_CANT_OPEN_FILE' => "No se ha podido abrir el fichero para leer",
	'ERR_UNIMPORTED_RECORDS_IN_QUEUE' => 'Todavía hay registros en la cola pendientes de importar',
	'ERR_FILE_READ_FAILED' => 'Error en la lectura del fichero',
	'LBL_IMPORT_SCHEDULED' => 'Importación Planificada',
	'Scheduled Import' => 'Importación Planificada',
	'LBL_SCHEDULED_IMPORT_DETAILS' => 'La importación ha sido programada y recibirás un correo cuando termine el proceso. <br>
										Asegúrate de que puedes recibir correos de notificación de la aplicación',
	'ERR_DETAILS_BELOW' => 'Detalles a continuación',
	'LBL_ERROR' => 'Error:',
	'LBL_OK_BUTTON_LABEL' => 'Vale',
	'TOTAL_RECORDS' => 'Número total de registros',
	'LBL_NUMBER_OF_RECORDS_DELETED' => 'Número total de registros eliminados',
	'LBL_NUMBER_OF_RECORDS_MERGED' => 'Número total de registros combinados',
	'LBL_TOTAL_RECORDS' => 'Número total de registros',
	'LBL_UNDO_RESULT' => 'Resultado de deshacer importación',
	'LBL_LAST_IMPORTED_RECORDS' => 'Ultimos Registros Importados',
	'LBL_NO_ROWS_FOUND' => 'No se han encontrado filas',
	'ERR_UNIMPORTED_RECORDS_EXIST' => 'Todavía hay registros pendientes de importación en la cola, que impiden importar más información. <br>
										Vacía la cola de importación para iniciar el proceso de nuevo',
	'ERR_FAILED_TO_LOCK_MODULE' => 'No se ha podido bloquear el módulo para la importación. Inténtalo de nuevo más tarde.',
	'LBL_RUNNING' => 'En ejecución',
	'LBL_CLEAR_DATA' => 'Vaciar cola de importación',
	'ERR_MODULE_IMPORT_LOCKED' => 'No puedes importar este módulo ahora mismo, ya que hay otro proceso de importación en ejecución. Inténtalo de nuevo más tarde.',
	'LBL_MODULE_NAME' => 'Módulo',
	'LBL_USER_NAME' => 'Usuario',
	'LBL_LOCKED_TIME' => 'Tiempo de bloqueo',
	'LBL_CANCEL_IMPORT' => 'Cancelar Importación',
	'ERR_IMPORT_INTERRUPTED' => 'La importación actual ha sido interrumpida.',
	'LBL_INVALID_FILE' => 'Fichero Inválido',
	'LBL_FILE_TYPE' => 'Tipo Fichero',
	'csv' => 'CSV',
	'vcf' => 'VCard',
	'LBL_FILE_UPLOAD_FAILED' => 'Ha fallado la carga del fichero',
	'LBL_IMPORT_ERROR_LARGE_FILE' => 'El fichero es demasiado grande. El tamaño máximo permitido (',
	'LBL_IMPORT_CHANGE_UPLOAD_SIZE' => ') se puede incrementar en el fichero de configuarción de PHP',
	'LBL_IMPORT_DIRECTORY_NOT_WRITABLE' => 'El directorio temporal de importación no tiene suficientes permisos de escritura.',
	'LBL_IMPORT_FILE_COPY_FAILED' => 'Error copiando el fichero a importar. Revisa los permisos del sistema',
	'ImportInfo' => 'Esta extensión añade la funcionalidad de importación a la aplicación a la que se accede mediante el icono en cada módulo no directamente, así que puedes eliminarlo del menú.',
);
?>
