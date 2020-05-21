<?php

namespace App\Http\Controllers\Delivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {      
        return view('delivery.setting');
    }
}
