<?php

namespace App\Controllers;

class EjController extends BaseController
{
    public function index()
    {
        //echo view('estructure/header.php');
        //echo view('estructure/container.php');
        //echo view('estructure/footer.php');
        return view('estructure/header.php').
               view('estructure/container.php').
               view('estructure/footer.php');
    }
}
