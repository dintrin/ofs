<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class softCopy extends Controller
{
    //


    public function requested(){

        return view ("softCopyRequested");

    }

}
