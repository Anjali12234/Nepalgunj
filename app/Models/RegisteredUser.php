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
        'remarks',
        'avatar',
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

    protected function avatar(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('registeredUser', 'public') : null,
        );
    }

    public function registeredUserDetail(): HasOne
    {
        return $this->hasOne(RegisteredUserDetail::class);
    }

    public function educationLists()
    {
        return $this->hasMany(EducationList::class);
    }
    public function entertainmentLists()
    {
        return $this->hasMany(EntertainmentList::class);
    }
    public function propertyLists()
    {
        return $this->hasMany(EntertainmentList::class);
    }
    public function healthCareLists()
    {
        return $this->hasMany(HealthCareList::class);
    }
    public function hospitalityLists()
    {
        return $this->hasMany(HospitalityList::class);
    }
}
