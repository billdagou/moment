<?php
namespace Dagou\Moment\Interfaces;

interface Source {
    const VERSION = '2.29.1';

    /**
     * @return string
     */
    public function getJs(): string;
}