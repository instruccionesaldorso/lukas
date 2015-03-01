<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Template Bootstrap extension',
	'description' => 'It builds the base template for the website',
	'category' => 'plugin',
	'author' => 'Sergio Catalá',
	'author_email' => 'sergio.catala@audibene.de',
	'author_company' => 'audibene GmBH',
	'dependencies' => 'extbase,fluid',
	'state' => 'alpha',
	'clearCacheOnLoad' => '1',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0',
			'extbase' => '6.2.0',
			'fluid' => '6.2.0',
		)
	)
);
?>
