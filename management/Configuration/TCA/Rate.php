<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_management_domain_model_rate'] = array(
	'ctrl' => $TCA['tx_management_domain_model_rate']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'price',
	),
	'types' => array(
		'1' => array('showitem' => 'price'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'price' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_rate.price',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int,required'
			),
		),
	),
);

?>