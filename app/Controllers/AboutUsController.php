<?php
namespace App\Controllers;

class AboutUsController extends BaseController
{
    public function index()
    {
        echo view('estructure/header');
        echo view('estructure/aboutUs');
        echo view('estructure/footer');
    }
}