<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index() {
        return 'Selamat Datang di website company profile kami';
    }
}