<?php

namespace App\Models;

use App\HasReferenceNumber;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EntertainmentList extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    use HasReferenceNumber;

    protected $fillable = [
        'entertainment_category_id',
        'registered_user_id',
        'name',
        'address',
        'contact_number',
        'affiliated',
        'description',
        'program',
        'email',
        'facebook_url',
        'youtube_url',
        'latitude',
        'longitude',
        'is_featured',
        'tiktok_url',
        'website_url',
        'map_url',
        'whats_app_no',
        'reference_no',
        'slug',
        'position',
        'status',
        'thumbnail',
    ];

    public function entertainmentCategory()
    {
        return $this->belongsTo(EntertainmentCategory::class);
    }
    protected function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('entertainments', 'public') : null,
        );
    }
    public function registeredUser()
    {
        return $this->belongsTo(RegisteredUser::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    public function files()
    {
        return $this->morphMany(File::class, 'model');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($entertainmentList) {
            $entertainmentList->position = static::max('position') + 1;
        });
    }

    
    public function generateReferenceNumber()
    {
        $name = strtoupper(Str::substr($this->name, 0, 3));
        $randomNumber = rand(1000, 9999);
        return $name . '-' . $randomNumber;
    }
}
