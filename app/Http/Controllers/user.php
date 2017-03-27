<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Session;

class user extends Controller
{
    public function index()
    {
        $fromdate = Input::get('fromdate');
        $todate = Input::get('todate');

        if( ( Session::has('todate') && Session::has('fromdate')) && !(strlen($fromdate) >2 && strlen($todate) > 2 ) )
        {
            $todate = Session::get('todate');
            $fromdate = Session::get('fromdate');
        }


        $response = array();

        if(strlen($fromdate) >2 && strlen($todate) > 2  ){

            $response['requests'] = 1;
            $response['collections'] = 1;
            $response['soft_copy_requests'] = 1;
            $response['hard_copy_requests'] = 1;
            $response['c_form_collected'] = 1;
            $response['c_form_pending'] = 1;
            $response['c4_form_collected'] = 1;
            $response['c4_form_pending'] = 1;
            $response['vi_collected'] = 1;
            $response['vi_pending'] = 1;
            $response['ack_collected'] = 1;
            $response['ack_pendign'] = 1;
            $response['dc_created'] = 1;
            $response['dc_delivered'] = 1;
            $response['dc_shipped'] = 1;
            $response['todate'] = $todate;
            $response['fromdate'] = $fromdate;

            Session::put('fromdate', $fromdate);
            Session::put('todate', $todate);

        }
        else{

            $response['requests'] = 0;
            $response['collections'] = 0;
            $response['soft_copy_requests'] = 0;
            $response['hard_copy_requests'] = 0;
            $response['c_form_collected'] = 0;
            $response['c_form_pending'] = 0;
            $response['c4_form_collected'] = 0;
            $response['c4_form_pending'] = 0;
            $response['vi_collected'] = 0;
            $response['vi_pending'] = 0;
            $response['ack_collected'] = 0;
            $response['ack_pendign'] = 0;
            $response['dc_created'] = 0;
            $response['dc_delivered'] = 0;
            $response['dc_shipped'] = 0;
            $response['todate'] = "";
            $response['fromdate'] = "";
            Session::put('fromdate', "");
            Session::put('todate', "");

        }


        $username=Auth::user()->email;

        $not=Notification::where('uid_target','=',$username)->where('status','=','un_read')->get();
//        dd($not[0]->message);
        return view('dashboard',compact('username','not', 'response'));
    }

    public function listen()
    {
        $username=Auth::user()->email;
        return view('a',compact('username'));
    }

    public function upload(Request $request)
    {

        $errorcode="NA";
        $status="uploaded";
        if( !$request->hasFile('fileToUpload'))
        {
            $errorcode="file not found";
            $status="failed";
            $values=array('errorcode'=>$errorcode,'status'=>$status);
            return (json_encode($values));
            //return $request->file('fileToUpload')->getClientOriginalName();
            //return 'true';
        }
        $size = Input::file('fileToUpload')->getSize();
        $filename=$request->file('fileToUpload')->getClientOriginalName();
        $fileext=$request->file('fileToUpload')->getClientOriginalExtension();
        $destination='Downloads';
        if(!$request->file('fileToUpload')->isValid())
        {
            $errorcode="incomplete file";
            $status="failed";
            $values=array('errorcode'=>$errorcode,'status'=>$status,array('filename'=>$filename,'fileext'=>$fileext,'filesize'=>$size));
            return (json_encode($values));
        }
        if($fileext=="php" || $fileext=="html")
        {
            $errorcode="Invalid file format";
            $status="failed";
            $values=array('errorcode'=>$errorcode,'status'=>$status,array('filename'=>$filename,'fileext'=>$fileext,'filesize'=>$size));
            return (json_encode($values));

        }
        if($size>1500)
        {
            $errorcode="choose a smaller file";
            $status="failed";
            $values=array('errorcode'=>$errorcode,'status'=>$status,array('filename'=>$filename,'fileext'=>$fileext,'filesize'=>$size));
            return (json_encode($values));

        }
        // dd(User::where('email' ,'=' ,'akubuzz@gmail.com')->pluck('name'));
        //dd($this->auth->getUser()->email);
        if(($request->file('fileToUpload')->move($destination,$filename)))
        {

            $values=array('errorcode'=>$errorcode,'status'=>$status,'data'=>array('filename'=>$filename,'fileext'=>$fileext,'filesize'=>$size));
//            Mail::send('email.sendmail',['data'=>json_encode($values)],function ($message){
//                $message->from('akshay.singh@power2sme.com','laravel');
//                $message->to('akshay.singh@power2sme.com');
//                $message->subject('File Uploaded');
//                $path='Downloads/fn.js';
//                $message->attach($path);



//            });

//            $file=new ;
//            $file->name=$filename;
//            $file->username=$this->auth->getUser()->email;
//            $file->save();
//            fileCount::count();
            //return redirect('/');
            //return View::make('/')->with('count'=>)
            //event(new ActionDone());
            return (json_encode($values));
            //return $values;
        }
        $errorcode="failed to upload";
        $status="Failed";
        $values=array('errorcode'=>$errorcode,'status'=>$status,array('filename'=>$filename,'fileext'=>$fileext,'filesize'=>$size));
        //return (json_encode($values));
    }
    //
}
