<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{

    public function home()
    {
        return view('home');
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function electric_cooperatives()
    {
        return view('electric_cooperatives');
    }

    public function allied_organizations()
    {
        return view('allied_organizations');
    }

    public function issuances()
    {
        return view('issuances');
    }

    public function resource_center()
    {
        return view('resource_center');
    }

    public function publications()
    {
        return view('publications');
    }

    public function events()
    {
        return view('events');
    }

    public function news_and_updates()
    {
        return view('news_and_updates');
    }

    public function sendContact(Request $request){
        
        $adminEmail = env('MAIL_USERNAME');
        Mail::to($adminEmail)->send(new ContactMail($request->all()));

        return view('success');
    
    }

    #Press Release Pages

    public function pressRelease(Request $request, $page)
    {
        return view('press_releases.'.$page);
    }
}
