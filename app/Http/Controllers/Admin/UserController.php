<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     // $users = User::latest()->paginate(5);
    //     // return view('admin.users.index',compact('users'))
    //     //     ->with('i', (request()->input('page', 1) - 1) * 5);
    //     $user = DB::table('users')->paginate(5);
    //     return view('admin.user.index', compact('user'));
    // }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        $btn = '<a href="/admin/user/'.$data->id.'/edit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                        $btn = $btn.' <form action="'. route('user.destroy', $data->id) .'" method="POST" style="display: inline-block;">
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
        return view('admin.user.index');
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::create($request->all());
         
        return redirect('/admin/user')->with('success','Data user berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        // return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
         
        $user->update($request->all());
         
        return redirect('/admin/user')->with('success','Data user berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id',$id)->delete();
  
        return redirect('/admin/user')->with('success','Data user berhasil dihapus!');
    }
}
