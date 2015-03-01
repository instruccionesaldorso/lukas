<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$identifier = str_replace('_', '', $_EXTKEY) . '_' . strtolower('Invoices');
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$identifier] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($identifier, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/Invoice.xml');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Invoices',
	'Invoices'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'management');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_management_domain_model_customer');
$TCA['tx_management_domain_model_customer'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_customer',
		'label' => 'internal_id',
		'label_alt' => 'surname,name',
		'label_alt_force' => 1,
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'searchFields' => 'internal_id,name,surname,companies,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Customer.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_management_domain_model_customer.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_management_domain_model_company');
$TCA['tx_management_domain_model_company'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_company',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'searchFields' => 'title,department,contact,location,phone,internal_comments,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Company.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_management_domain_model_company.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_management_domain_model_job');
$TCA['tx_management_domain_model_job'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job',
		'label' => 'date',
		'label_alt' => 'customer',
		'label_alt_force' => 1,
		'default_sortby' => 'ORDER BY date DESC',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'searchFields' => 'category,location,date,start,job_start,job_end,end,customer,fees,trip_excluded,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Job.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_management_domain_model_job.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_management_domain_model_invoice');
$TCA['tx_management_domain_model_invoice'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice',
		'label' => 'customer_id',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'default_sortby' => 'ORDER BY date DESC',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'searchFields' => 'title,customer_id,date,amount,payment_date,jobs,company,tax,rate,description,modality',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Invoice.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_management_domain_model_invoice.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_management_domain_model_tax');
$TCA['tx_management_domain_model_tax'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_tax',
		'label' => 'percentage',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'searchFields' => 'percentage,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Tax.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_management_domain_model_tax.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_management_domain_model_rate');
$TCA['tx_management_domain_model_rate'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_rate',
		'label' => 'price',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'searchFields' => 'price,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Rate.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_management_domain_model_rate.gif'
	),
);

$TCA['tx_management_domain_model_location'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_location',
		'label' => 'title',
		'type' => 'record_type',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'searchFields' => 'title,place,address,zip,city',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Location.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_management_domain_model_location.gif'
	),
);

$TCA['tx_management_domain_model_fee'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_fee',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'delete' => 'deleted',
		'searchFields' => 'title,price,quantity',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Fee.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_management_domain_model_fee.gif'
	),
);

?>
