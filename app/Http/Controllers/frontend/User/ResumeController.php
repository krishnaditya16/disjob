<?php

namespace App\Http\Controllers\frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
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
            $data = Resume::select('*')->where('user_email_cv', '=', Auth::user()->email);
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $btn = '<form action="'. route('resume.destroy', $data->id) .'" method="POST" style="display: inline-block;">
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
        return view('main.user.resume');
    }

    /**
     * Update user's profile
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function upload(Request $request)
    {
        $request->validate([
            'user_email_cv' => 'required',
            'cv_file' => 'required|mimes:jpeg,png,jpg,zip,pdf|max:2048',
        ]);

        $input = $request->all();
  
        if ($cvFile = $request->file('cv_file')) {
            $destinationPath = 'uploaded_resume/';
            // $cvName = $cvFile->getClientOriginalName() . "_" . date('YmdHis') . "." . $cvFile->getClientOriginalExtension();
            $cvName1 = $cvFile->getClientOriginalName();
            $cvName2 = explode('.', $cvName1)[0]; // Filename 'filename'
            $cvName = $cvName2 . "_" . date('YmdHis') . "." . $cvFile->getClientOriginalExtension();
            $cvFile->move($destinationPath, $cvName);
            $input['cv_file'] = "$cvName";
        } else {
            unset($input['cv_file']);
        } 

        Resume::create($input);

        return back()
            ->with('success','You have successfully uploaded your resume.')
            ->with('cv_file',$cvName);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Resume::where('id',$id)->delete();
  
        return redirect('/resume')->with('success','Data succesfully deleted!');
    }
}
