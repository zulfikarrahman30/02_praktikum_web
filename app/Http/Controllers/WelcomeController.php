<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        return ('selamat datang');
    }
    public function about(){
        return ('Nama : Zulfikar Rahman <br> NIM : 1941720192');
    }
    public function article($page){
        return ('halaman artikel ini dengan ID').$page; 
    }
}
