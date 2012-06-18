<?php

class FernandoMantoan_Plugin_Internationalization extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request)
    {
        $locale = Zend_Registry::get('Zend_Locale');
        $translate = Zend_Registry::get('Zend_Translate');
        if (!$translate->isAvailable($locale->getLanguage())) {
            $locale->setLocale("en_US");
            $translate->setLocale("en");
        }
        Zend_Registry::set('Zend_Locale', $locale);
        Zend_Registry::set('Zend_Translate', $translate);
    }
}