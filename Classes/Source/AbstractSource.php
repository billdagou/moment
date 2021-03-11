<?php
namespace Dagou\Moment\Source;

use Dagou\Moment\Interfaces\Source;
use TYPO3\CMS\Core\SingletonInterface;

abstract class AbstractSource implements Source, SingletonInterface {
    const URL = '';

    /**
     * @return string
     */
    public function getJs(): string {
        return static::URL.$this->getJsBuild();
    }

    /**
     * @return string
     */
    protected function getJsBuild(): string {
        return 'moment.min.js';
    }
}