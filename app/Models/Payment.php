<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['job_request_id', 'total_payment', 'payment_method', 'payment_status', 'payment_date'];

    public function jobRequest()
    {
        return $this->belongsTo(JobRequest::class);
    }
}
