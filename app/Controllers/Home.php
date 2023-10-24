<?php

namespace App\Controllers;
use Codeigniter;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function phpversion()
    {
        echo 'PHP version: ' . phpversion() . ' , Codeigniter Version: ' .
         CodeIgniter\CodeIgniter::CI_VERSION.' -- ENVIRONTMENT:'.env('CI_ENVIRONMENT');
    }


    
}
