<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Shop extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('shop');;
    }
}
