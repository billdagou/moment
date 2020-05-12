<?php
namespace Dagou\Moment\Interfaces;

interface CDN {
    const VERSION = '2.25.2';

    /**
     * @param string|NULL $js
     * @param bool $footer
     */
    public function load(string $js = NULL, bool $footer = TRUE);
}