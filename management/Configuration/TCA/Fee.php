<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_management_domain_model_fee'] = array(
	'ctrl' => $TCA['tx_management_domain_model_fee']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title,quantity,price',
	),
	'types' => array(
		'1' => array('showitem' => 'title,quantity,price'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_fee.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'quantity' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_fee.quantity',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('1', 1),
					array('2', 2),
					array('3', 3),
					array('4', 4),
					array('5', 5),
				)
			),
		),
		'price' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_fee.price',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2,required'
			),
		),
	),
);

?>