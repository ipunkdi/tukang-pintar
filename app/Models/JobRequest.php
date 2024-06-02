<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'service_id', 'craftsman_id', 'address', 'work_date'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function craftsman()
    {
        return $this->belongsTo(Craftsman::class);
    }

    public function customerReviews()
    {
        return $this->hasOne(CustomerReviews::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
