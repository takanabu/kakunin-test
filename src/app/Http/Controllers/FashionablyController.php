<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class FashionablyController extends Controller
{
    public function index()
  {
    return view('index');
  }

    public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['first_name', 'last_name','gender','email', 'tel1','tel2', 'tel3','address','building','detail']);
    return view('confirm', compact('contact'));

  }
  
   public function store(ContactRequest $request)
{
    $contact = $request->only(['first_name', 'last_name','gender','email', 'tel1','tel2', 'tel3','address','building','detail']);
    Contact::create($contact);
    return view('thanks');  
}


}
