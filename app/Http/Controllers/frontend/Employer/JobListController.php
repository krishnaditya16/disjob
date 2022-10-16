<?php

namespace App\Http\Controllers\frontend\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Perusahaan;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class JobListController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Job::select('*')->where('perusahaan_job', '=', Auth::user()->name);
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $btn = ' <a href="/jobs-list/'.$data->id.'/edit" class="genric-btn info small"><i class="fas fa-edit"></i> Edit</a>';
                        $btn = $btn.' <form action="'. route('job-list.destroy', $data->id) .'" method="POST" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="'. csrf_token() .'">
                                        <button type="submit" class="genric-btn danger small" onclick="return confirm(\'Are you sure you want to delete this data?\')">
                                        <i class="fas fa-trash"></i> Delete</button>
                                    </form>';    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }  
        return view('main.employer.job_list');
    }

    public function create()
    {
        $lokasi = Lokasi::all();
        $kategori = Kategori::all();
        $tipe = Type::all();
        $job = Job::select('*')->where('perusahaan_job', '=', Auth::user()->name)->get();
        return view('main.employer.add_job', compact('lokasi', 'kategori', 'tipe', 'job'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'lokasi_job' => 'required',
            'kategori_job' => 'required',
            'perusahaan_job' => 'required',
            'tipe_job' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'kemampuan' => 'required',
            'pengalaman' => 'required',
            'jumlah_lowongan' => 'required',
            'gaji' => 'required',
            'deadline' => 'required',
        ]);

        Job::create($request->all());
         
        return redirect('/jobs-list')->with('success','Data succesfully added!');
    }

    public function edit($id)
    {
        $lokasi = Lokasi::all();
        $kategori = Kategori::all();
        $tipe = Type::all();
        $job = Job::find($id);
        return view('main.employer.edit_job',compact('job', 'lokasi', 'kategori', 'tipe'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_method','_token','submit');

        $request->validate([
            'title' => 'required',
            'lokasi_job' => 'required',
            'kategori_job' => 'required',
            'perusahaan_job' => 'required',
            'tipe_job' => 'required',
            'alamat' => 'required',
            'deskripsi' => 'required',
            'kemampuan' => 'required',
            'pengalaman' => 'required',
            'jumlah_lowongan' => 'required',
            'gaji' => 'required',
            'deadline' => 'required',
        ]);

        $job = Job::find($id);
        $job->update($data);
        // $job->update($request->all());

        return redirect('/jobs-list')->with('success','Data succesfully changed!');
    }

    public function destroy($id)
    {
        Job::where('id',$id)->delete();
  
        return redirect('/jobs-list')->with('success','Data succesfully deleted!');
    }
}
