<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $table = 'resume';
    public $timestamps = true;
    
    protected $fillable = [
        'cv_file', 'user_email_cv'
    ];
}
