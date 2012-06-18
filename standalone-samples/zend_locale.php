<?php

require_once 'Zend/Currency.php';
require_once 'Zend/Date.php';
require_once 'Zend/Locale.php';
require_once 'Zend/Locale/Exception.php';
require_once 'Zend/Registry.php';

/**
 * Samples of Zend_Locale as a standalone component.
 */
try {
    $locale = new Zend_Locale(); // Default constructor, gest from Zend_Locale::BROWSER
    $forceLocale = new Zend_Locale('pt_BR'); // Constructor with an specified locale
    $browserLocale = new Zend_Locale(Zend_Locale::BROWSER); // Locale from user's browser
    $serverLocale = new Zend_Locale(Zend_Locale::ENVIRONMENT); // Locale from host server
    $frameworkLocale = new Zend_Locale(Zend_Locale::FRAMEWORK); // Framework app default settings
} catch(Zend_Locale_Exception $e) {
    $locale = new Zend_Locale(Zend_Locale::ENVIRONMENT);
}

// Setting the locale
$ptBR = new Zend_Locale('pt_BR');
$enUS = new Zend_Locale('en_US');
// Per component
$date = new Zend_Date(null, null, $enUS);
echo $date . "\n";
// Widely
Zend_Registry::set('Zend_Locale', $ptBR);
$currency = new Zend_Currency();
echo $currency . "\n";