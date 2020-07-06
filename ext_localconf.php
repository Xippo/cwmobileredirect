<?php

if (!defined("TYPO3_MODE")) {
    die("Access denied.");
}

$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/index_ts.php']['preprocessRequest'][]
    =  \CarstenWindler\Cwmobileredirect\Main::class .'->firstEntryPoint';

$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['configArrayPostProc']['tx_cwmobileredirect']
    = \CarstenWindler\Cwmobileredirect\Main::class . '->secondEntryPoint';
	
// include user functions to use in typoscript conditions	
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('cwmobileredirect') . 'Classes/UserFunctions.php');
