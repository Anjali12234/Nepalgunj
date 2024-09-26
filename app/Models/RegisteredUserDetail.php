<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class RegisteredUserDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'registered_user_id',
        'address',
        'full_name',
        'whats_app_number',
        'citizenship_no',
        'citizenship_image_front',
        'citizenship_image_back',
        'ward_no',
        'avatar',
    ];


    protected function citizenshipImageFront(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('registeredUser', 'public') : null,
        );
    }
    protected function citizenshipImageBack(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('registeredUser', 'public') : null,
        );
    }

    protected function avatar(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('registeredUser', 'public') : null,
        );
    }

    public function registeredUser(): BelongsTo
    {
        return $this->belongsTo(RegisteredUser::class);
    }
}
