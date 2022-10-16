<?php

namespace App\Http\Controllers\frontend\Employer;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ApplicantController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = JobApplication::select('*')->where('company_name', '=', Auth::user()->name);
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $btn = ' <a href="mailto:'.$data->email_applicant.'" class="genric-btn info small"><i class="fas fa-paper-plane"></i> Contact Now!</a>';  
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }  
        return view('main.employer.applicant');
    }
}
