<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): void
    {
        echo view('header');
        echo view('welcome_message');
        echo view('footer');
    }

    public function Mruta2()
    {
        $vistas = view('header') . view('disenio2') . view('footer');
        return $vistas;
    }
}
