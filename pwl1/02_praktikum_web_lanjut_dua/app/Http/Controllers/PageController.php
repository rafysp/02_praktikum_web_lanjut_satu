<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function index(){
        return 'Selamat Datang';
    }
    function about(){
        return 'Nama : M. Rafy Shah Pahlevi <br> NIM : 2141720244';
    }
    function article($id){
        return 'Halaman Article Dengan ID ' .$id;
    }
}
