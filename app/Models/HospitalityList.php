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

class HospitalityList extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    use HasReferenceNumber;

    protected $fillable = [
        'hospitality_category_id',
        'registered_user_id',
        'reference_no',
        'slug',
        'position',
        'details',
        'youtube_link',
        'map_url',
        'facebook_url',
        'whats_app_no',
        'image',
        'status',
        'website_url',
        'opening_time',
        'address',
        'name',
        'contact_number',
        'email',
        'total_rooms',
        'room_types',
        'facilities',
        'price_per_night',
        'average_meal_price',
        'menu',
        'parking_available',       
        'delivery_available',
    ];

    public function hospitalityCategory()
    {
        return $this->belongsTo(HospitalityCategory::class);
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

        static::creating(function ($hospitalityList) {
            $hospitalityList->position = static::max('position') + 1;
        });
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('hospitalityList', 'public') : null,
        );
    }
    public function generateReferenceNumber()
    {
        $name = strtoupper(Str::substr($this->name, 0, 3));
        $randomNumber = rand(1000, 9999);
        return $name . '-' . $randomNumber;
    }
}
