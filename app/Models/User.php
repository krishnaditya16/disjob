<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Support\Facades\Hash;

class User extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticableTrait;

    protected $table = 'users';
    public $timestamps = true;
    
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make($value);
    // }

    public function setDateAttribute($value)
    {
        $this->attributes['birth_date'] = Carbon::parse($value)->format('mm/dd/yyyy');
    }

    protected $fillable = [
        'name', 'email', 'password', 'role', 'gender', 'birth_date', 'nationality', 'phone', 'address'
    ];
}