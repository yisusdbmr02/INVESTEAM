<?php

namespace App\Controllers;

class InicioController extends BaseController
{
    public function index()
    {
        return view('estructure/header.php').
               view('estructure/container.php').
               view('estructure/footer.php');
    }
}
