<?php

namespace App\Http\Controllers;
use Exception;
use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $data = [
        'subject' => 'Sachin Tutorial Email',
        'body'  => 'Hello This is my email delivery'
        ];
        try {
        $p = Mail::to('sachinsoni@geekinformatic.com')
        ->send(new MailNotify($data));
        print_r($p);
        return response()->json(['Great check your mail box']);

        }
        catch(Exception $th){
return response()->json(['Sorry Something Went Wrong']);
        
        }
    }
}
