# Zend Framework - Internationalization and Localization Samples

This project was created to store and show samples of the Zend Framework Internationalization and Localization article. It has some samples of how to use **Zend_Locale** and **Zend_Translate** as standalone components and how to integrate them in a Zend Framework MVC application.

## Article

The permalink to the article is: [http://fernandomantoan.com/frameworks/zend-framework/internacionalizacao-e-localizacao-com-zend-framework/](http://fernandomantoan.com/frameworks/zend-framework/internacionalizacao-e-localizacao-com-zend-framework/), and it's written in brazilian portuguese.

## Standalone

The samples located in the **standalone-samples** folder use the **Zend_Translate** and **Zend_Locale** as standalone classes.

The **Zend_Locale** samples show how to create and use the class within locale-aware components, and if the example is runned in a cli the **try catch** block will catch a **Zend_Locale_Exception**, showing how to work with an automatic locale detection failure.

The **Zend_Translate** samples will start with a single file constructor, addition of more languages, and will and with an automatic file scanning, using the file name as the locale source.

## MVC Implementations

Two ways were implemented to make this integration:

* The first way is detecting the browser preferred language, and if it's not supported by the application, fallbacking to the english language;
* The second way is through the routes, defining the language, as shown in [Zend Casts](www.zendcasts.com/introducing-zend_translate/2009/11/).

## Other implementations

If you have other implementations and want to contribute, fork the repo and make a pull request, so other people new to the framework can see the ways to provide i18n and l10n.
