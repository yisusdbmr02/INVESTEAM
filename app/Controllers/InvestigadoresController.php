<?php

namespace App\Controllers;

class InvestigadoresController extends BaseController
{
    public function index()
    {
        return view('estructure/header.php').
        view('listado_investigadores.php').
        view('estructure/footer.php');
    }

    public function add()
    {
        
        return view('estructure/header.php').
        view('listado_investigadores.php').
        view('estructure/footer.php');
    }
}