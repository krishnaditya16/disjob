<?php

namespace App\Http\Controllers\frontend\Employer;

use App\Http\Controllers\Controller;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function index()
    {
        $perusahaan = Perusahaan::select('*')->where('email', '=', Auth::user()->email)->first();
        return view('main.employer.dashboard', compact('perusahaan'));
    }
}
