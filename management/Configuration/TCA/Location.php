<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_management_domain_model_location'] = array(
	'ctrl' => $TCA['tx_management_domain_model_location']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title, place, address, zip, city',
	),
	'types' => array(
		'0' => array('showitem' => 'address,zip,city'),
		'\Lukas\Management\Domain\Model\JobLocation' => array('showitem' => 'title,place,address,zip,city'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'record_type' => array(
			'label' => 'Domain Object',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('undefined', '0'),
					array('Job location', '\Lukas\Management\Domain\Model\JobLocation'),
				),
				'default' => '0'
			)
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_location.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'place' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_location.place',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'address' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_location.address',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'zip' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_location.zip',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'city' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_location.city',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
	),
);

?>