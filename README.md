# TYPO3 Extension: Moment

EXT:moment allows you to use [Moment.js](https://momentjs.com/) in your extensions.

The extension version only matches the Moment.js library version, it doesn't mean anything else.

## How to use it

You can load the library in your Fluid template.

    <moment:load />

You can also load your own libraries.

    <moment:load src="..." />

For more options please refer to &lt;f:asset.script&gt;.

To use other Moment source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\Moment\Utility\ExtensionUtility::registerSource(\Dagou\Moment\Source\jsDelivr::class);

You may want to disable the other source and use the local one instead in some cases, for example saving page as PDF by [WKHtmlToPdf](https://wkhtmltopdf.org/).

    <moment:load disableSource="true" />