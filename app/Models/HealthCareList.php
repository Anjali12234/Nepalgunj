<?php

namespace App\Models;

use App\HasReferenceNumber;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class HealthCareList extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    use HasReferenceNumber;

    protected $fillable = [
        'health_care_category_id',
        'registered_user_id',
        'reference_no',
        'department',
        'n_m_c_no',
        'slug',
        'qualification',
        'position',
        'o_p_d_schedule',
        'details',
        'youtube_link',
        'address',
        'map_url',
        'twitter_url',
        'facebook_url',
        'whats_app_no',
        'image',
        'status',
        'name',
        'contact_number',
        'email',
        'website_url'
    ];

    public function healthCareCategory()
    {
        return $this->belongsTo(HealthCareCategory::class);
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

        static::creating(function ($healthCareList) {
            $healthCareList->position = static::max('position') + 1;
        });
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('healthCareList', 'public') : null,
        );
    }
    public function generateReferenceNumber()
    {
        $name = strtoupper(Str::substr($this->name, 0, 3));
        $randomNumber = rand(1000, 9999);
        return $name . '-' . $randomNumber;
    }

}
