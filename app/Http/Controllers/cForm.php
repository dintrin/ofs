<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class cForm extends Controller
{
    //
    public function collected()
    {

        return view ('manageCFormCollected');

    }


    public function requested()
    {

        return view ('manageCFormrequested');

    }




}
