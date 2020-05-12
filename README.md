# TYPO3 Extension: Moment

EXT:moment allows you to use [moment.js](https://momentjs.com/) in your extensions.

The extension version only matches the moment.js library version, it doesn't mean anything else.

## How to use it

You can load the library in your Fluid template with **LoadViewHelper**.

    <moment:load />

You can also load your own libraries.

    <moment:load js="..." />
    
Or, load the javascript library on top.

    <moment:load footer="false" />
    
To use the CDN resource, please set `$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['moment']['CDN']` in `ext_localconf.php` or `AdditionalConfiguration.php`.

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['moment']['CDN'] = \Dagou\Moment\CDN\jsDelivr::class;