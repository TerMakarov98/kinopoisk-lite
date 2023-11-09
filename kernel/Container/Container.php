<?php

namespace App\Kernel\Container;

use App\Kernel\Controller\Controller;
use App\Kernel\Http\Request;
use App\Kernel\Router\Router;
use App\Kernel\View\View;
use App\Kernel\View\ViewInterface;

class Container
{
    public readonly Request $request;
    public readonly Router $router;
    public readonly ViewInterface $view;

    public function __construct()
    {
        $this->registerServices();
    }

    private function registerServices()
    {
        $this->request = Request::createFromGlobals();
        $this->view = new View();
        $this->router = new Router(
            $this->view,
            $this->request);
    }
}