<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function basic_email(Request $request) {
        $Name = $request->Name;
        $Email = $request->Email;
        $messages = $request->textArea;
        $top_message = $request->top_message;

        $data = array('messages'=>$messages);
        $datarespon = array($Name,$Email,$top_message);

        Mail::send(['text'=>'mail'], $data, function($message) use ($datarespon) {
         $message->to($datarespon[1], $datarespon[0])->subject
            ($datarespon[2]);
         $message->from('manwan220960@gmail.com','Woramet');
        });

        echo "Succeed";
   }
}
