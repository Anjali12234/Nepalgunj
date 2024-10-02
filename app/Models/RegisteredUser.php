<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class RegisteredUser extends Authenticatable
{
    use  HasFactory, Notifiable, SoftDeletes;
    use HasRoles;

    protected $fillable = [
        'username',
        'email',
        'password',
        'phone_no',
        'category',
        'gender',
        'remarks',
        'avatar',
        'd_o_b',
        'is_active',

    ];
    protected $casts = [
        'category' => 'array',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean',
        ];
    }



    public function registeredUserDetail(): HasOne
    {
        return $this->hasOne(RegisteredUserDetail::class);
    }

}
