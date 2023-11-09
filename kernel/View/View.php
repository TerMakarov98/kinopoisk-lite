<?php

namespace App\Kernel\View;

use App\Kernel\Exceptions\ViewNotFoundException;

class View implements ViewInterface
{
    public function page(string $name): void
    {

        $viewPath = APP_PATH . "/views/pages/$name.php";

        if (!file_exists($viewPath)) {
            throw new ViewNotFoundException("View $name not found");
        }
        extract([
            'view' => $this,
        ]);

        include_once $viewPath;
    }

    public function component(string $name, array $data = []): void
    {
        $componentPath = APP_PATH . "/views/components/$name.php";

        if (!file_exists($componentPath)) {
            echo "Component $name not found";

            return;
        }

        extract(array_merge($this->defaultData(), $data));

        include $componentPath;
    }

    private function defaultData(): array
    {
        return [
            'view' => $this,
        ];
    }
}
