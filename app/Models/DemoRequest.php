<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemoRequest extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'hotel_name', 'hotel_type',
        'number_of_rooms', 'city', 'message', 'preferred_date',
        'preferred_time', 'status', 'admin_notes', 'ip_address'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
}
