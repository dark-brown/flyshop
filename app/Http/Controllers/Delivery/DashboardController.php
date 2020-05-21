<?php

namespace App\Http\Controllers\Delivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class DashboardController extends Controller
{
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
        
        return view('delivery.home', compact('param'));
    }
}
