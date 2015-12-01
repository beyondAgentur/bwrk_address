<?php

$tcaConfiguration = new \BERGWERK\BwrkUtility\Utility\Tca\Configuration();
$tcaConfiguration->setExt(\BERGWERK\BwrkAddress\Bootstrap::$_extKey);
$tcaConfiguration->setModel('tx_bwrkaddress_domain_model_address');
$tcaConfiguration->setLabelField('title');
$tcaConfiguration->setIconFile('EXT:bwrk_address/Resources/Public/Icons/Address.png');

$tca = new \BERGWERK\BwrkUtility\Utility\Tca\Tca();
$tca->init($tcaConfiguration);

$tca->addInputField('title', 'LLL:EXT:bwrk_address/Resources/Private/Language/locallang_db.xlf:title');

$tca->addTab('tab_references', 'LLL:EXT:bwrk_address/Resources/Private/Language/locallang_db.xlf:references');
$tca->addSysCategoryReferences('categories', 0, 10, 0, 999, 'LLL:EXT:bwrk_address/Resources/Private/Language/locallang_db.xlf:categories');

return $tca->createTca();