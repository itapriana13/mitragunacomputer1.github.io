<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('sidebar.index');
    }

    public function about(Request $request)
    {
        return view('sidebar.about');
    }

    public function paket(Request $request)
    {
        return view('sidebar.paket');
    }

    public function aboutus(Request $request)
    {
       return view('sidebar.aboutus');
    }

    public function contact(Request $request)
    {
        return view('sidebar.contact');
    }

    public function contact_mail_send(Request $request)
    {
        Mail::to('officemgc1@gmail.com')->send(new ContactMail($request));
        return redirect('/sidebar/contact');
    }
}
