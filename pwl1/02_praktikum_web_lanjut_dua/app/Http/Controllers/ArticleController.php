<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    function article($id){
        return 'Halaman Article Dengan ID ' .$id;
    }
}

