<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $datos['nombre'] = 'Yisus';
        return view('welcome_message',$datos);
    }
}
