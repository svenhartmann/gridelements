<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocNew.tx_gridelements_backend_layout=1
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.renderMode = tabs
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY, 'view/class.tx_gridelements_view.php', '_pi1', 'CType', 1);

// register BE AJAX controller
$TYPO3_CONF_VARS['BE']['AJAX']['tx_gridelements::controller'] =
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'lib/class.tx_gridelements_ajax.php:tx_gridelements_ajax->init';
