<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        //Add session
        // $request->session()->put(['paul'=>'student']);
        //Delete individual session
        // $request->session()->forget('paul');

        //Delete everything from sessions
        // $request->session()->flush();

        // return $request->session()->get('paul');
        // return $request->session()->all();

        $request->session()->flash('message', 'Post has been created');

        return $request->session()->get('message');
        
        


        // return view('home');
    }
}
