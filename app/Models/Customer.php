<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Customer extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticableTrait;

    protected $table = "customers";
    protected $fillable = ['name', 'email', 'password', 'phone_number', 'address'];

    public function jobRequest()
    {
        return $this->hasMany(JobRequest::class);
    }

    public function customerReviews()
    {
        return $this->hasMany(CustomerReviews::class);
    }
}
