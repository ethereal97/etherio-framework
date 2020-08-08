<?php

namespace Ethereal\Foundation;

class Application
{
    private static $instance;
    
    protected $basePath;

    public function __construct(string $basePath)
    {
        $this->basePath = realpath($basePath) ?: $basePath;
        self::$instance = $this;
    }

    public function basePath(string $path = ''): string
    {
        return $this->basePath . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    public function storagePath(string $path = ''): string
    {
        return $this->storagePath . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }

    public static function getInstance(): self
    {
        return self::$instance;
    }
}
