<?php

/* ETHEREAL - Etherio Framework Helpers */

if (! function_exists('env')) {
    function env(string $name, $default = null)
    {
        return $_ENV[$name] ?? getenv($name) ?: $default;
    }
}

if (! function_exists('app')) {
    function app()
    {
        return Ethereal\Foundation\Application::getInstance();
    }
}

if (! function_exists('config')) {
    function config(string $key, $default = null)
    {
        $config = app('config');

        return $config[$key] ?: $default;
    }
}
