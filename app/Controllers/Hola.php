<?php

namespace App\Controllers;

class Hola extends BaseController
{
    public function index()
    {
        return view('hola'); // Carga la vista app/Views/hola.php
    }
}
