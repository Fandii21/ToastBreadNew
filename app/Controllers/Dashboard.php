<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('dashboard');;
    }
}
