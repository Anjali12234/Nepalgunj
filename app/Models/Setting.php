<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'logo1',
        'instagram_url',
        'facebook_url',
        'twitter_url',
        'youtube_url',
        'map_url',
        'name_ne',
        'name_en',
        'address_ne',
        'address_en',
        'phone_number',
        'email',
        'logo2',
    ];

    protected function logo1(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('setting', 'public') : null,
        );
    }

    protected function logo2(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('setting', 'public') : null,
        );
    }

}

