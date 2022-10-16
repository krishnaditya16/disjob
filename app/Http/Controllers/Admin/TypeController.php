<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class TypeController extends Controller
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
            $data = Type::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $btn = '<a href="/admin/type/'.$data->id.'/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                        $btn = $btn.' <form action="'. route('type.destroy', $data->id) .'" method="POST" style="display: inline-block;">
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
        return view('admin.type.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type.create');
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
            'tipe_kerja' => 'required',
        ]);

        Type::create($request->all());
         
        return redirect('/admin/type')->with('success','Data tipe berhasil disimpan!');
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
    public function edit(Type $type)
    {
        return view('admin.type.edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $request->validate([
            'tipe_kerja' => 'required',
        ]);
         

        $type->update($request->all());

        return redirect('/admin/type')->with('success','Data tipe berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tipe')->where('id',$id)->delete();
  
        return redirect('/admin/type')->with('success','Data tipe berhasil dihapus!');
    }
}
