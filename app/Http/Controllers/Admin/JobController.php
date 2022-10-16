<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\JobExport;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Perusahaan;
use App\Models\Type;
use Yajra\DataTables\DataTables;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $job = DB::table('jobs')->paginate(5);
    //     return view('admin.job.index', compact('job'));
    // }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Job::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $btn = '<a href="/admin/job/'.$data->id.'" class="btn btn-info btn-sm"><i class="fas fa-external-link-square-alt"></i> Show</a>';
                        $btn = $btn.' <a href="/admin/job/'.$data->id.'/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                        $btn = $btn.' <form action="'. route('job.destroy', $data->id) .'" method="POST" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="'. csrf_token() .'">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin ingin menghapus data ini?\')">
                                        <i class="fas fa-trash"></i> Delete</button>
                                    </form>';    
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }  
        return view('admin.job.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lokasi = Lokasi::all();
        $kategori = Kategori::all();
        $tipe = Type::all();
        $perusahaan = Perusahaan::all();
        return view('admin.job.create', compact('lokasi', 'kategori', 'perusahaan', 'tipe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
         
        return redirect('/admin/job')->with('success','Data job berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('admin.job.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $lokasi = Lokasi::all();
        $kategori = Kategori::all();
        $tipe = Type::all();
        $perusahaan = Perusahaan::all();
        return view('admin.job.edit',compact('job', 'lokasi', 'kategori', 'perusahaan', 'tipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
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
         

        $job->update($request->all());

        return redirect('/admin/job')->with('success','Data job berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('jobs')->where('id',$id)->delete();
  
        return redirect('/admin/job')->with('success','Data job berhasil dihapus!');
    }
}
