<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PerusahaanExport;
use App\Models\Kategori;
use Yajra\DataTables\DataTables;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $perusahaan = DB::table('perusahaan')->paginate(5);
    //     return view('admin.perusahaan.index', compact('perusahaan'));
    // }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Perusahaan::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $btn = '<a href="/admin/perusahaan/'.$data->id.'/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                        $btn = $btn.' <form action="'. route('perusahaan.destroy', $data->id) .'" method="POST" style="display: inline-block;">
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
        return view('admin.perusahaan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perusahaan.create');
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
            'nama_perusahaan' => 'required',
            'logo_perusahaan' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi_perusahaan' => 'required',
            'email' => 'required',
            'alamat_website' => 'required',
        ]);

        // $imageName = time().'.'.$request->logo_perusahaan->getClientOriginalName();  
     
        // $request->logo_perusahaan->move(public_path('images'), $imageName);

        // Perusahaan::create($request->all());

        $input = $request->all();
  
        if ($image = $request->file('logo_perusahaan')) {
            $destinationPath = 'image/';
            $logoImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $logoImage);
            $input['logo_perusahaan'] = "$logoImage";
        }
    
        Perusahaan::create($input);
         
        return redirect('/admin/perusahaan')->with('success','Data perusahaan berhasil disimpan!');
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
    public function edit(Perusahaan $perusahaan)
    {
        return view('admin.perusahaan.edit',compact('perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'email' => 'required',
            'alamat_website' => 'required',
            'deskripsi_perusahaan' => 'required',
        ]);
         
        $input = $request->all();
  
        if ($image = $request->file('logo_perusahaan')) {
            $destinationPath = 'image/';
            $logoImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $logoImage);
            $input['logo_perusahaan'] = "$logoImage";
        }else{
            unset($input['logo_perusahaan']);
        }
          
        $perusahaan->update($input);

        return redirect('/admin/perusahaan')->with('success','Data perusahaan berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('perusahaan')->where('id',$id)->delete();
  
        return redirect('/admin/perusahaan')->with('success','Data perusahaan berhasil dihapus!');
    }
}
