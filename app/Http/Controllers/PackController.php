<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackController extends Controller
{
    public function packindex(){

        return view('pack.packList');
       }
}
