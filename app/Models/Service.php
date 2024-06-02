<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['service_name', 'service_description'];

    public function craftsman()
    {
        return $this->belongsToMany(Craftsman::class, 'service_id', 'craftsman_id');
    }

    public function jobRequest()
    {
        return $this->hasMany(JobRequest::class);
    }
}
