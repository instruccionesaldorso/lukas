<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Lukas.' . $_EXTKEY,
	'Invoices',
	array(
		'Invoice' => 'list, show, new, create, edit, update, delete',

	),
	// non-cacheable actions
	array(
		'Invoice' => 'list, show, new, create, edit, update, delete',

	)
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:management/Configuration/TSconfig/Page/Setup.ts">');

?>