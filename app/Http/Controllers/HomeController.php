<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Change language
     */
    public function changeLanguage($language)
    {
        Session::put('website_language', $language);

        return redirect()->back();
    }

    /**
     * Change language
     */
    public function logout()
    {
        Auth::logout();
        
        return redirect('home');
    }
}
