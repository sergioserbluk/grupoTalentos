<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       echo view('head_view');
       echo view('navBar_view');
       echo view('home_view');
       echo view('footer_view');
    }
}
