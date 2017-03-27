<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class manageDC extends Controller
{

public function dashboard()
{

    $sos = \App\so::where('is_delivered', '=', 0)->get();
    $so_numbers = array();

    foreach ($sos as $so) {
        if (strpos($so->so_number, 'SO') !== false) {
            $so_numbers[] = $so->bill_to_name . " | " .  $so->so_number;
        }

    }

    return view('manageDC', compact('so_numbers'));
}


}
