<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class DashboardController extends Controller
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
            'login'			=> false,
            'role'			=> -1
    	];

    	if(Auth::check())
    	{
    		$param['login'] = true;
            $param['avatar'] = Auth::user()['portfolio'] ? Auth::user()['portfolio'] : "default.jpg";
            $param['role'] = Auth::user()['role'];
    	}

        $param = json_encode($param);
        
        return view('admin.home', compact('param'));
    }

}