<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReviews extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'craftsman_id', 'type_of_service_id', 'ratings', 'comment', 'review_date'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function craftsman()
    {
        return $this->belongsTo(Craftsman::class);
    }

    public function jobRequest()
    {
        return $this->belongsTo(JobRequest::class);
    }
}
