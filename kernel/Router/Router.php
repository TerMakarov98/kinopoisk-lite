<?php

namespace App\Kernel\Router;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Request;
use App\Kernel\View\View;

class Router
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct(
        private View $view,
        private Request $request
    )
    {
        $this->initRoutes();
    }

    public function dispatch(string $uri, string $method): void
    {
        $rout = $this->findRoute($uri, $method);

        if (! $rout) {
            $this->notFound();
        }

        if (is_array($rout->getAction())) {
            [$controller, $action] = $rout->getAction();

            /** @var Controller $controller */
            $controller = new $controller();

            call_user_func([$controller, 'setView'], $this->view);
            call_user_func([$controller, 'setRequest'], $this->request);
            call_user_func([$controller, $action]);
        }else{
            call_user_func($rout->getAction());
        }
    }

    private function notFound(): void
    {
        echo '<h1>Error 404</h1>';
        exit;
    }

    private function findRoute(string $uri, string $method): Route|false
    {
        if (! isset($this->routes[$method][$uri])) {
            return false;
        }

        return $this->routes[$method][$uri];
    }

    private function initRoutes(): void
    {
        $routes = $this->getRoutes();

        foreach ($routes as $route) {
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    /**
     * @return Route[]
     */
    private function getRoutes(): array
    {
        return require APP_PATH.'/config/routes.php';
    }
}
