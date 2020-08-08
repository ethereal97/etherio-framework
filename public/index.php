<?php

/**
 * Ethereal - Etherio Framework
 *
 * @copyright 2020
 * @author SHIN MAUNG MAUNG <ethereal97@gmail.com>
 * @license MIT
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Ethereal\Foundation\Application(dirname(__DIR__));

echo "\033[0;34m", var_dump($app), "\033[0m", PHP_EOL;
