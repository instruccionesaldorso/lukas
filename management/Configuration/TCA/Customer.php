<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_management_domain_model_customer'] = array(
	'ctrl' => $TCA['tx_management_domain_model_customer']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'internal_id, name, surname, companies',
	),
	'types' => array(
		'1' => array('showitem' => 'internal_id, name, surname, companies'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'internal_id' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_customer.internal_id',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_customer.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'surname' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_customer.surname',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'companies' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_customer.companies',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_management_domain_model_company',
				'foreign_table_where' => 'AND tx_management_domain_model_company.pid = ###PAGE_TSCONFIG_IDLIST### ORDER BY title ASC',
				'MM' => 'tx_management_customer_company_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 1,
			),
		),
	),
);

?>
