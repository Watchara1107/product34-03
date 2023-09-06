<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index(){
        return view('admin.reserve.index');
    }
}
