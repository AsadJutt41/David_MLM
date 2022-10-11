<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function verifyEmail()
    {
        return view('auth.verify-email');
    }
    public function about()
    {
        return view('user.about');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function services()
    {
        return view('user.services');
    }
    public function faq()
    {
        return view('user.faq');
    }
}
