<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        /**
     * Show the application home.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.home');
    }
 
    /**
     * Show the application contact.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('admin.pages.contact');
    }

    /**
     * Show the application contact.
     *
     * @return \Illuminate\View\View
     */
}
