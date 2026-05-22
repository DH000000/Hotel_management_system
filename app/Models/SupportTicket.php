<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    protected $table = 'support_tickets';

    protected $fillable = [
        'ticket_number', 'user_id', 'subject', 'message',
        'priority', 'status', 'assigned_to', 'resolved_at', 'closed_at'
    ];

    protected $casts = [
        'resolved_at' => 'datetime',
        'closed_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function replies()
    {
        return $this->hasMany(TicketReply::class, 'ticket_id');
    }

    public static function generateTicketNumber()
    {
        return 'TKT' . strtoupper(uniqid());
    }
}

class TicketReply extends Model
{
    protected $fillable = ['ticket_id', 'user_id', 'message', 'attachment', 'is_admin_reply'];

    public function ticket()
    {
        return $this->belongsTo(SupportTicket::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
