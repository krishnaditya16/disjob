<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lokasi;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index()
    // {
    //     $lokasi = DB::table('lokasi')->paginate(5);
    //     return view('admin.lokasi.index', compact('lokasi'));
    // }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Lokasi::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $btn = '<a href="/admin/lokasi/'.$data->id.'/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                        $btn = $btn.' <form action="'. route('lokasi.destroy', $data->id) .'" method="POST" style="display: inline-block;">
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
        return view('admin.lokasi.index');
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lokasi.create');
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
            'lokasi_kerja' => 'required',
        ]);

        Lokasi::create($request->all());
         
        return redirect('/admin/lokasi')->with('success','Data lokasi berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lokasi $lokasi)
    {
        return view('admin.lokasi.edit',compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lokasi $lokasi)
    {
        $request->validate([
            'lokasi_kerja' => 'required',
        ]);
         

        $lokasi->update($request->all());

        return redirect('/admin/lokasi')->with('success','Data lokasi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('lokasi')->where('id',$id)->delete();
  
        return redirect('/admin/lokasi')->with('success','Data lokasi berhasil dihapus!');
    }
}
