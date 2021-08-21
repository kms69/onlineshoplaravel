<?php

namespace App\Http\Controllers\Mainend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminPage(){
        return view('admin.main.index');
    }
}
