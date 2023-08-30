<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\FlareClient\View;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return View('about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function instance()
    {
        return View('instances');
    }

    /**
     * Display the specified resource.
     */
    public function contact()
    {
        return View('contact');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function activite()
    {
        return View('activite');
    }

    /**
     * Update the specified resource in storage.
     */
    public function expertise()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()){
                return redirect()->route('about');
            }
             else {
                return view('index');
            }
        }
        return view('index');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
