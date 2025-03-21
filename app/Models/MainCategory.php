<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class MainCategory extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'title_en',
        'title_ne',
        'slug',
        'image',
        'position',
        'status',
    ];

    public function healthCareCategories()
    {
        return $this->hasMany(HealthCareCategory::class);
    }
    public function propertyCategories()
    {
        return $this->hasMany(PropertyCategory::class);
    }
    public function educationCategories()
    {
        return $this->hasMany(EducationCategory::class);
    }
    public function hospitalityCategories()
    {
        return $this->hasMany(HospitalityCategory::class);
    }
    public function entertainmentCategories()
    {
        return $this->hasMany(EntertainmentCategory::class);
    }
    public function jobCategories()
    {
        return $this->hasMany(JobCategory::class);
    }


    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('mainCategory', 'public') : null,
        );
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_en'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($mainCategory) {
            $mainCategory->position = static::max('position') + 1;
        });
    }
}
