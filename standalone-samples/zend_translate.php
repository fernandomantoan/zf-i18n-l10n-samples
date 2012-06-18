<?php

require_once 'Zend/Translate.php';

$translate = new Zend_Translate(
    array(
        'adapter' => 'array',
        'content' => 'languages/en.php',
        'locale'  => 'en'
    )
);

$translate->addTranslation(
    array(
        'content' => 'languages/pt.php',
        'locale' => 'pt'
    )
);
$translate->addTranslation(
    array(
        'content' => 'languages/es.php',
        'locale' => 'es'
    )
);

$translate->_("Exemplo");

echo $translate->_("Internacionalizado") . "\n";

echo $translate->_("Exemplo", "es") . "\n";

echo $translate->_("Exemplo", "en") . "\n";

$translate->setLocale("pt_BR");

echo $translate->_("Exemplo") . "\n";

if ($translate->isAvailable("it")) {
    echo $translate->_("Pizza", "it");
} else {
    echo "Italian not available\n";
}

$translate2 = new Zend_Translate(
    array(
        'adapter' => 'array',
        'content' => 'languages/',
        'scan' => Zend_Translate::LOCALE_FILENAME
    )
);

echo $translate2->_("Exemplo") . "\n";
echo $translate2->_("Exemplo", "es") . "\n";
echo $translate2->_("Exemplo", "en") . "\n";