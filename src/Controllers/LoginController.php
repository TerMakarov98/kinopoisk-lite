<?php

namespace App\Controllers;

use App\Kernel\Controller\Controller;

class LoginController extends Controller
{
    public function index(): void
    {
        $this->view(name: 'login');
//        $this->view(name: 'login', title: 'Вход');
    }

    public function login()
    {
        $email = $this->request()->input('email');
        $password = $this->request()->input('password');

        $this->auth()->attempt($email, $password);

        $this->redirect('/');
    }

    public function logout(): void
    {
        $this->auth()->logout();

        $this->redirect('/login');
    }
}
