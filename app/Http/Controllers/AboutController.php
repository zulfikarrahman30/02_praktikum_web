<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return ('Nama : Zulfikar Rahman <br> NIM : 1941720192');
    }
}
