<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $table = 'application';
    public $timestamps = true;
    
    protected $fillable = [
        'job_name', 'company_name', 'name_applicant', 'email_applicant', 'cv_applicant', 'expected_salary'
    ];
}
