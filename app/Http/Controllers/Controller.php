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

    public function services(Request $request)
    {
        $data['tab_all'] = 'show active';
        $data['tab_visit'] = '';
        $data['tab_study'] = '';
        $data['tab_migrate'] = '';
        $requests = $request->all();

        if ($request['active']) {
            switch ($request['active']) {

                case 'visit':
                    $data['tab_all'] = '';
                    $data['tab_visit'] = 'show active';
                    $data['tab_study'] = '';
                    $data['tab_migrate'] = '';
                    break;
                case 'study':
                    $data['tab_all'] = '';
                    $data['tab_visit'] = '';
                    $data['tab_study'] = 'show active';
                    $data['tab_migrate'] = '';
                    break;
                case 'migrate':
                    $data['tab_all'] = '';
                    $data['tab_visit'] = '';
                    $data['tab_study'] = '';
                    $data['tab_migrate'] = 'show active';
                    break;
                default:

                    $data['tab_all'] = 'active';
                    $data['tab_visit'] = '';
                    $data['tab_study'] = '';
                    $data['tab_migrate'] = '';
                    break;
            }

            
        }
        
        return view('services', $data);
    }

    public function partners()
    {
        return view('partners');
    }

    public function developments()
    {
        return view('developments');
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function success()
    {
        return view('success');
    }

    public function sendContact(Request $request){
        
        $adminEmail = env('MAIL_USERNAME');
        Mail::to($adminEmail)->send(new ContactMail($request->all()));

        return view('success');
    
    }
}
