<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $param = [
    		'avatar' 		=> null,
    		'login'			=> false
    	];

    	if(Auth::check())
    	{
    		$param['login'] = true;
    		$param['avatar'] = Auth::user()['portfolio'] ? Auth::user()['portfolio'] : "default.jpg";
    	}

        $param = json_encode($param);
        
        return view('home', compact('param'));
    }

    public function about() 
    { 
    	$param = [
    		'avatar' 		=> null,
    		'login'			=> false
    	];

    	if(Auth::check())
    	{
    		$param['login'] = true;
    		$param['avatar'] = Auth::user()['portfolio'] ? Auth::user()['portfolio'] : "default.jpg";
    	}

    	$param = json_encode($param);
    	return view('about', compact('param'));
    }

    public function contact()
    {
        $param = [
    		'avatar' 		=> null,
    		'login'			=> false
    	];

    	if(Auth::check())
    	{
    		$param['login'] = true;
    		$param['avatar'] = Auth::user()['portfolio'] ? Auth::user()['portfolio'] : "default.jpg";
    	}

    	$param = json_encode($param);
    	return view('contact', compact('param'));
    }

    public function cart()
    {
        $param = [
    		'avatar' 		=> null,
    		'login'			=> false
    	];

    	if(Auth::check())
    	{
    		$param['login'] = true;
    		$param['avatar'] = Auth::user()['portfolio'] ? Auth::user()['portfolio'] : "default.jpg";
    	}

    	$param = json_encode($param);
    	return view('cart', compact('param'));
    }
}
