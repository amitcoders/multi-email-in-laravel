<?php

namespace App\Http\Controllers;
use App\Mail\Multimail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class MultiemailController extends Controller
{
    public function index()
    {
        return view('multiemail');
    }

    public function send(Request $request)
    {
     $this->validate($request, [
      'email'  =>  'required',
      'message' =>  'required',
     ]);
     $admin_email = $request->email;
     $multimail = (explode(",",$admin_email));
     for($count = 0; $count < count($multimail); $count++)
     {
      $data[] = array(
            'message' =>   $request->message,
            'email'   =>  $multimail[$count] );  }
    foreach($data as $d){
    $demail = $d['email'];
    Mail::to($demail)->send(new Multimail($d));
    }
    return redirect('multiemail')->with('success', 'Mail has been sent successfully!');

}
}
