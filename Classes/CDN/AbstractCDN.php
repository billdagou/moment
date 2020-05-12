<?php
namespace Dagou\Moment\CDN;

use Dagou\Moment\Interfaces\CDN;
use Dagou\Moment\Traits\PageRenderer;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractCDN implements CDN, SingletonInterface {
    use PageRenderer;
    const URL = '';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE) {
        $js = $this->renderJs($js);

        if ($footer) {
            $this->getPageRenderer()->addJsFooterLibrary('moment', $js);
        } else {
            $this->getPageRenderer()->addJsLibrary('moment', $js);
        }
    }

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return static::URL.$this->getBuild();
    }

    /**
     * @return string
     */
    protected function getBuild(): string {
        return 'moment.min.js';
    }
}