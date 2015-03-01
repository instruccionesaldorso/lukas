<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_management_domain_model_tax'] = array(
	'ctrl' => $TCA['tx_management_domain_model_tax']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'percentage',
	),
	'types' => array(
		'1' => array('showitem' => 'percentage'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'percentage' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_tax.percentage',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2,required'
			),
		),
	),
);

?>