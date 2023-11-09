<?php

namespace App\Kernel\View;

interface ViewInterface
{

    public function component(string $name, array $data = []): void;

}
