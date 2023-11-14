<?php

namespace App\Kernel\Router;

class Route
{
    public function __construct(private string $uri,
                                private string $method,
                                private        $action,
                                private array  $middleware = [],
    )
    {
    }

    public static function get(string $uri, $action, array $middleware = [])
    {
        return new static($uri, 'GET', $action, $middleware);
    }

    public static function post(string $uri, $action, array $middleware = [])
    {
        return new static($uri, 'POST', $action, $middleware);
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getMiddleware(): array
    {
        return $this->middleware;
    }

    public function hasMiddleware(): bool
    {
        return ! empty($this->middleware);
    }
}
