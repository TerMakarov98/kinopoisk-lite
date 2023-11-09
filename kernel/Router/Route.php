<?php

namespace App\Kernel\Router;

class Route
{
    public function __construct(private string $uri,
        private string $method,
        private $action)
    {
    }

    public static function get(string $uri, $action)
    {
        return new static($uri, 'GET', $action);
    }

    public static function post(string $uri, $action)
    {
        return new static($uri, 'POST', $action);
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMethod()
    {
        return $this->method;
    }
}
