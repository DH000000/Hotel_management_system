<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'unique_id', 'name', 'email', 'password', 'phone', 'alternate_phone',
        'profile_photo', 'role', 'hotel_id', 'status', 'last_login_at',
        'last_login_ip', 'login_count', 'two_factor_enabled',
        'preferences', 'language', 'timezone'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
        'preferences' => 'array',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function activityLogs()
    {
        return $this->hasMany(UserActivityLog::class);
    }

    public function sessions()
    {
        return $this->hasMany(UserSession::class);
    }

    public function isSuperAdmin()
    {
        return $this->role === 'super_admin';
    }

    public function isAdmin()
    {
        return in_array($this->role, ['super_admin', 'admin']);
    }

    public function isHotelOwner()
    {
        return $this->role === 'hotel_owner';
    }

    public function isStaff()
    {
        return $this->role === 'staff';
    }

    public function isGuest()
    {
        return $this->role === 'guest';
    }
}
