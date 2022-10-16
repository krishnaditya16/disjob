<?php

namespace App\Http\Controllers\frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class JobApplicationController extends Controller
{
    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // return view('main.user.resume', [
        //     'resume' => $request->user()
        // ]);
        if ($request->ajax()) {
            $data = JobApplication::select('*')->where('email_applicant', '=', Auth::user()->email);
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $btn = '<form action="'. route('jobapp.destroy', $data->id) .'" method="POST" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="'. csrf_token() .'">
                                    <button type="submit" class="genric-btn danger small" onclick="return confirm(\'\Are you sure you want to delete this data?\')">
                                    <i class="fas fa-trash"></i> Delete</button>
                                </form>';    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }  
        return view('main.user.job_application');
    }

    public function page_apply($id)
    {
        $job = Job::find($id);
        $resume = Resume::select('*')->where('user_email_cv', '=', Auth::user()->email)->get();
        $perusahaan = DB::table('jobs')
                    ->join('perusahaan', 'jobs.perusahaan_job', '=', 'perusahaan.nama_perusahaan')
                    ->where('jobs.id', $id)
                    ->first();
        return view('main.user.apply', compact('job', 'resume', 'perusahaan'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'job_name' => 'required',
            'company_name' => 'required',
            'name_applicant' => 'required', 
            'email_applicant' => 'required', 
            'cv_applicant' => 'required', 
            'expected_salary' => 'required',
        ]);

        JobApplication::create($request->all());
         
        return redirect('/my-application')->with('success','You have succesfully applied for the job!');
    }

    public function destroy($id)
    {
        JobApplication::where('id',$id)->delete();
  
        return redirect('/my-application')->with('success','Data succesfully deleted!');
    }
}
