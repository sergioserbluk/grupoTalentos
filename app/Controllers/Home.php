<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       echo view('front/head_view');
       echo view('front/navBar_view');
       echo view('front/home_view');
       echo view('front/footer_view');
    }
    public function acerca_de()
    {
       echo view('front/head_view');
       echo view('front/navBar_view');
       echo view('front/acerca_de');
       echo view('front/footer_view');
    }
    public function acerca_view()
      {
         echo view('front/head_view');
         echo view('front/navBar_view');
         echo view('front/acerca_view');
         echo view('front/footer_view');
      }
}
