<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MainpageController extends Controller
{
    /**
     * Show the application home.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // $job = Job::orderBy('created_at', 'DESC')->get()->take(5);
        // $job = Job::join('perusahaan', 'jobs.perusahaan_job', '=', 'perusahaan.nama_perusahaan')
        //             ->orderBy('jobs.created_at', 'DESC')->get()->take(5);
        $job = Perusahaan::join('jobs', 'perusahaan.nama_perusahaan', '=', 'jobs.perusahaan_job')
                    ->orderBy('jobs.created_at', 'DESC')->get()->take(5);
        $lokasi = Lokasi::pluck('lokasi_kerja');
        return view('main.pages.home', compact('job', 'lokasi'));
    }

    public function contact()
    {
        return view('main.pages.contact');
    }

    public function about()
    {
        return view('main.pages.about');
    }

    public function joblisting()
    {
        $search = isset($_GET['search']) ?  $_GET['search'] : '';
        $kategori_search = isset($_GET['category']) ? $_GET['category'] : '';
        $lokasi_search = isset($_GET['location']) ? $_GET['location'] : '';
        $tipe_search = isset($_GET['type']) ? $_GET['type'] : '';

        $job = Job::where('title', 'like', '%' . $search . '%')
            ->where('kategori_job', 'like', "%" . $kategori_search . "%")
            ->where('lokasi_job', 'like', "%" . $lokasi_search . "%")
            ->where('tipe_job', 'like', "%" . $tipe_search . "%")
            ->join('perusahaan', 'perusahaan.nama_perusahaan', '=', 'jobs.perusahaan_job')
            ->select('jobs.id','jobs.title','jobs.perusahaan_job','jobs.lokasi_job',
                    'jobs.tipe_job','jobs.gaji','jobs.created_at','perusahaan.logo_perusahaan')
            ->paginate(5);

        $kategori = Kategori::pluck('nama_kategori');
        $lokasi = Lokasi::pluck('lokasi_kerja');

        return view('main.pages.joblisting', (compact('job', 'kategori', 'lokasi')));
    }

    public function show($id)
    {
        $job = Job::find($id);
        $perusahaan = DB::table('jobs')
                    ->join('perusahaan', 'jobs.perusahaan_job', '=', 'perusahaan.nama_perusahaan')
                    ->where('jobs.id', $id)
                    ->first();
        return view('main.pages.job_detail', compact('job', 'perusahaan'));
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content
        ];

        Mail::send('main.pages.email_template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
