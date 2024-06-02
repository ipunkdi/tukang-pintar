<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Craftsman extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_number', 'address', 'skill_description'];

    public function service()
    {
        return $this->belongsToMany(Service::class, 'craftsman_id', 'service_id');
    }

    public function jobRequest()
    {
        return $this->hasMany(JobRequest::class);
    }

    public function customerReviews()
    {
        return $this->hasMany(CustomerReviews::class);
    }
}
