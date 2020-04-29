<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
  public function create()
  {
   return view('messages.create');
  }
  public function store(ContactRequest $request)
  {
    $mailable=new ContactMessageCreated($request->name,$request->email,$request->message);
    Mail::to("momar.dieng@uadb.edu.sn")->send($mailable);
    return 'Done! ';

  }
}
