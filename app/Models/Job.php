<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    public $timestamps = true;
    
    protected $fillable = [
        'title', 'lokasi_job', 'kategori_job', 'perusahaan_job','tipe_job', 'alamat', 'deskripsi', 
        'kemampuan', 'pengalaman', 'jumlah_lowongan', 'gaji', 'deadline'
    ];
}
