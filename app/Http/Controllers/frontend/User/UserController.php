<?php

namespace App\Http\Controllers\frontend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('main.user.dashboard');
    }

    public function resume()
    {
        return view('main.user.resume');
    }

    public function job_apply()
    {
        return view('main.user.job_application');
    }
}
