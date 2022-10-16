<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';
    public $timestamps = true;
    
    protected $fillable = [
        'nama_perusahaan', 'logo_perusahaan', 'deskripsi_perusahaan', 'email', 'alamat_website'
    ];
}
