<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_management_domain_model_job'] = array(
	'ctrl' => $TCA['tx_management_domain_model_job']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'customer, category, location, date, start, job_start, job_end, end, fees, trip_excluded',
	),
	'types' => array(
		'1' => array('showitem' => 'customer, category, location, date, start, job_start, job_end, end, fees, trip_excluded'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'customer' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job.customer',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_management_domain_model_customer',
				'foreign_table_where' => 'AND tx_management_domain_model_customer.pid = ###PAGE_TSCONFIG_IDLIST### ORDER BY surname, name',
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
		'category' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job.category',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('1', 1),
					array('2', 2),
					array('3', 3),
					array('4', 4),
				)
			),
		),
		'location' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job.location',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_management_domain_model_location',
				'foreign_table_where' => 'AND tx_management_domain_model_location.pid = ###PAGE_TSCONFIG_IDLIST### ORDER BY title',
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
		'date' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job.date',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'start' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job.start',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'time',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'job_start' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job.job_start',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'time,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'job_end' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job.job_end',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'time,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'end' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job.end',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'time,required',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'fees' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job.fees',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_management_domain_model_fee',
				'foreign_field' => 'uid',
				'minitems'      => 0,
				'maxitems'      => 1,
				'appearance' => array(
					'collapse' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		'trip_excluded' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_job.trip_excluded',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
	),
);

?>