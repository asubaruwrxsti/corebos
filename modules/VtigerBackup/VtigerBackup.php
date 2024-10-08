<?php
/*+*******************************************************************************
 *  The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *********************************************************************************/
require_once 'include/db_backup/StagedBackup.php';
require_once 'include/db_backup/DatabaseBackup.php';
require_once 'include/db_backup/Source/MysqlSource.php';
require_once 'include/db_backup/Targets/File.php';
require_once 'modules/VtigerBackup/Zip/BackupZip.php';
require_once 'modules/VtigerBackup/Exception/VtigerBackupException.php';
require_once 'include/utils/utils.php';
require_once 'modules/VtigerBackup/Utils.php';
require_once 'modules/VtigerBackup/Locations/FTPBackup.php';
require_once 'modules/VtigerBackup/Locations/LocalBackup.php';

class VtigerBackup {
	private $folderList = array('storage','test','user_privileges');
	private $location = null;
	/**
	 *
	 * @var Vtiger_BackupZip
	 */
	private $zip = null;

	public function __construct() {
		$path = null;
		$limit = $this->getBackupLimit();
		if ($this->isLocalBackupEnabled()) {
			$this->location = Vtiger_Location::getInstance(Vtiger_Location::$LOCAL, $limit);
			$path = $this->location->getPath();
		} else {
			$this->location = Vtiger_Location::getInstance(Vtiger_Location::$FTP, $limit);
		}
		$this->zip = Vtiger_BackupZip::getInstance($path);
		ini_set('memory_limit', $this->getMemoryLimit());
		ini_set('max_execution_time', $this->getExecutionTimeLimit());
	}

	public function backup() {
		if ($this->isLocalBackupEnabled() || $this->isFTPBackupEnabled()) {
			$sourceConfig = DatabaseConfig::getInstanceFromConfigFile();
			$source = new MysqlSource($sourceConfig);
			$fileDest = new File($sourceConfig);
			$dbBackup = new DatabaseBackup($source, $fileDest);
			$dbBackup->backup();

			$this->location->limitBackup();

			$this->zip->addFile($fileDest->getFilePath(), false);
			if (GlobalVariable::getVariable('Backup_Storage_Include', 1) == 0 && ($key = array_search('storage', $folderList)) !== false) {
				unset($folderList[$key]);
			}
			foreach ($this->folderList as $folder) {
				$path = $this->getFolderPath($folder);
				$folder = $this->addTrailingSlash($folder);
				$this->zip->addDirectory($path, $folder);
			}
			$this->zip->close();
			$this->location->save($this->getBackupFileName());
			if (file_exists($fileDest->getFilePath())) {
				//unlink($fileDest->getFilePath());
			}
		}
	}

	public function getBackupFileName() {
		return $this->zip->getBackupFileName();
	}

	public function getBackupFileList() {
		return $this->location->getBackupFileList();
	}
	public function getBackupLimit() {
		require 'modules/VtigerBackup/backup.config.php';
		return $backupLimit;
	}

	public function getMemoryLimit() {
		require 'modules/VtigerBackup/backup.config.php';
		return $memoryLimit;
	}

	public function getExecutionTimeLimit() {
		require 'modules/VtigerBackup/backup.config.php';
		return $executionTimeLimit;
	}

	private function getFolderPath($folder) {
		switch ($folder) {
			case 'storage':
				return $this->getStorageFolderPath();
			case 'test':
				return $this->getTestFolderPath();
			case 'user_privileges':
				return $this->getUserPrivilegesPath();
		}
	}

	public function addTrailingSlash($path) {
		return (strrpos($path, DIRECTORY_SEPARATOR) !== strlen($path) -1 )? $path.DIRECTORY_SEPARATOR:$path;
	}

	public function fixPathSeparator($path) {
		$start = 0;
		do {
			$index = strpos($path, '/', $start);
			$start = $index + 1;
			if ($index && $path[$index - 1] == '\\'.DIRECTORY_SEPARATOR) {
				continue;
			} elseif ($index) {
				$path[$index] = DIRECTORY_SEPARATOR;
			}
		} while ($index);
		return $path;
	}

	public function getStorageFolderPath() {
		require 'config.inc.php';
		$rootPath = $this->addTrailingSlash($this->fixPathSeparator($root_directory));
		return $rootPath.'storage'.DIRECTORY_SEPARATOR;
	}

	public function getTestFolderPath() {
		require 'config.inc.php';
		$rootPath = $this->addTrailingSlash($this->fixPathSeparator($root_directory));
		return $rootPath.'test'.DIRECTORY_SEPARATOR;
	}

	public function getUserPrivilegesPath() {
		require 'config.inc.php';
		$rootPath = $this->addTrailingSlash($this->fixPathSeparator($root_directory));
		return $rootPath.'user_privileges'.DIRECTORY_SEPARATOR;
	}

	public function isLocalBackupEnabled() {
		require_once 'include/utils/cbSettings.php';
		return coreBOS_Settings::getSetting('enable_local_backup', false);
	}

	public function isFTPBackupEnabled() {
		require_once 'include/utils/cbSettings.php';
		return coreBOS_Settings::getSetting('enable_ftp_backup', false);
	}

	 /**
	 * Invoked when special actions are performed on the module.
	 * @param string Module name
	 * @param string Event Type (module.postinstall, module.disabled, module.enabled, module.preuninstall)
	 */
	public function vtlib_handler($modulename, $event_type) {
		if ($event_type == 'module.postinstall') {
			global $adb;
			// Mark the module as Standard module
			$adb->pquery('UPDATE vtiger_tab SET customized=0 WHERE name=?', array($modulename));
		} elseif ($event_type == 'module.disabled') {
			// Handle actions when this module is disabled.
		} elseif ($event_type == 'module.enabled') {
			// Handle actions when this module is enabled.
		} elseif ($event_type == 'module.preuninstall') {
			// Handle actions when this module is about to be deleted.
		} elseif ($event_type == 'module.preupdate') {
			// Handle actions before this module is updated.
		} elseif ($event_type == 'module.postupdate') {
			// Handle actions after this module is updated.
		}
	}
}
?>