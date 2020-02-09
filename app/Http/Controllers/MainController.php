<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        $iphone = strpos($user_agent, "iPhone");
        $android = strpos($user_agent, "Android");

        if ($iphone) {
            return redirect('https://www.apple.com');
        } elseif ($android) {
            return redirect('https://www.google.com');
        } else {
            return view('welcome');
        }
    }
}
