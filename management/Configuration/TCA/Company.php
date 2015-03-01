<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_management_domain_model_company'] = array(
	'ctrl' => $TCA['tx_management_domain_model_company']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'title, department, contact, location, phone, internal_comments',
	),
	'types' => array(
		'1' => array('showitem' => 'title, department, contact, location, phone, internal_comments'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_company.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'department' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_company.department',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'contact' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_company.contact',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'location' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_company.location',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_management_domain_model_location',
				/*'foreign_table' => 'tx_management_domain_model_location',
				'foreign_table_where' => 'AND tx_management_domain_model_location.pid = ###PAGE_TSCONFIG_IDLIST### ORDER BY tx_management_domain_model_location.address',
				'foreign_field' => 'uid',
				'size' => '3',
				'maxitems'      => 1,
				'autoSizeMax' => 10,
				'iconsInOptionTags' => 1,*/
				'wizards' => array(
					'_PADDING' => 4,
					'_VERTICAL' => 1,
					'suggest' => array(
						'type' => 'suggest',
						'default' => array(
							'searchWholePhrase' => 1
						)/*,
						'tx_management_domain_model_location' => array(
							'searchCondition' => 'doktype = 1'
						)*/
					),
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit location',
						'module' => array(
							'name' => 'wizard_edit',
						),
						'popup_onlyOpenIfSelected' => 1,
						'icon' => 'edit2.gif',
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1'
					),
					'add' => array(
						'type' => 'script',
						'title' => 'LLL:EXT:cms/locallang_tca.xlf:sys_template.basedOn_add',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_management_domain_model_location',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
						),
						'module' => array(
							'name' => 'wizard_add'
						)
					)
				)
			),
		),
		'phone' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_company.phone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'internal_comments' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:management/Resources/Private/Language/locallang_db.xlf:tx_management_domain_model_company.internal_comments',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
	),
);

?>