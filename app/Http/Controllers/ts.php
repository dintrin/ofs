<?php

namespace App\Http\Controllers;

use App\dc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class ts extends Controller
{
    //

    public function dashboard()
    {

        $sos = \App\so::where('is_delivered', '=', 0)->get();
        $so_numbers = array();

        foreach ($sos as $so) {

            $dcs = \App\dc::where('so_number', '=', $so->so_number)->get();
            if( $dcs->count() > 0)
            {
                if (strpos($so->so_number, 'SO') !== false) {
                    $so_numbers[] = $so->bill_to_name . " | " .  $so->so_number;
                }
            }

        }

        return view('ts', compact('so_numbers'));

    }


    public function soSelected(){

        $so_number =  Input::get('so_number');
        $result = array();
        $dcs = \App\dc::where('so_number', '=', $so_number)->get();
        $ii = 0;
        foreach ( $dcs as $dc)
        {
            $dc_statuses = \App\dc_status_master::where('dc_status', '>', $dc->dc_status)->get();

            $result[$ii]['dc_number'] = $dc->dc_number;
            $result[$ii]['dc_status'] = self::getStatusFromCode($dc->dc_status);
            $result[$ii]['created_at'] = $dc->created_at;
            $result[$ii]['possible_statuses'] = array();

            $jj = 0;
            foreach ($dc_statuses as $dc_status)
            {
                $result[$ii]['possible_statuses'][$jj]['status'] = $dc_status->dc_status;
                $result[$ii]['possible_statuses'][$jj]['description'] = $dc_status->dc_status_description;
                ++ $jj ;
            }

++$ii;
        }


//        dd($result);
        return view('tsSoSelected', compact('result'));

    }





    public function update()
    {
        $dc_number = Input::get('dc_number');
        $new_status = Input::get('updated_status');
//        dd($dc_number.$new_status);

        $dc = \App\dc::where('dc_number', '=', $dc_number)->pluck('dc_status');

        if(!is_null($dc)) {

            if ($new_status > $dc['0']) {
                dc::where('dc_number','=',$dc_number)->update(['dc_status'=>$new_status]);
                return 1;
            }
        }

        return 0;
    }


     static function getStatusFromCode($code)
{
    $status = \App\dc_status_master::where('dc_status', '=', $code)->get()->first();
    if( !is_null($status ))
    {
        return $status->dc_status_description;
    }
    return "cannot determine";
}


}
