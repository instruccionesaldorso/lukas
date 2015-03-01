<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_management_domain_model_invoice'] = array(
	'ctrl' => $TCA['tx_management_domain_model_invoice']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title, customer_id, date, amount, payment_date, jobs, company, tax, rate, description, modality',
	),
	'types' => array(
		'1' => array('showitem' => 'title, customer_id, date, amount, payment_date, jobs, company, tax, rate, description, modality'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'customer_id' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.customer_id',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'date' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.date',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'amount' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.amount',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'payment_date' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.payment_date',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'jobs' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.jobs',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_management_domain_model_job',
				'foreign_table_where' => 'AND tx_management_domain_model_job.pid = ###PAGE_TSCONFIG_IDLIST### ORDER BY date ASC',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 1,
			),
		),
		'company' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.company',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_management_domain_model_company',
				'foreign_table_where' => 'AND tx_management_domain_model_company.pid = ###PAGE_TSCONFIG_IDLIST### ORDER BY title ASC',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'tax' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.tax',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_management_domain_model_tax',
				'foreign_table_where' => 'AND tx_management_domain_model_tax.pid = ###PAGE_TSCONFIG_IDLIST### ORDER BY percentage ASC',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'rate' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.rate',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_management_domain_model_rate',
				'foreign_table_where' => 'AND tx_management_domain_model_rate.pid = ###PAGE_TSCONFIG_IDLIST### ORDER BY price ASC',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.description',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'modality' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_invoice.modality',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
	),
);

?>