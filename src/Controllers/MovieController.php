<?php

namespace App\Controllers;

class MovieController
{
    public static function index(): void
    {
        include_once APP_PATH.'/views/pages/movies.php';
    }
}
