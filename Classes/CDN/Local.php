<?php
namespace Dagou\Moment\CDN;

use Dagou\Moment\Traits\Asset;

class Local extends AbstractCDN {
    use Asset;
    const URL = 'EXT:moment/Resources/Public/';

    /**
     * @param string|NULL $js
     *
     * @return string
     */
    protected function renderJs(string $js = NULL): string {
        return $this->getAssetPath(
            self::URL.$this->getBuild()
        );
    }
}