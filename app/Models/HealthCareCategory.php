<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class HealthCareCategory extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'title_en',
        'title_ne',
        'slug',
        'icon',
        'type',
        'position',
        'status',
        'main_category_id'
    ];


    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class);
    }

    public function healthCareLists()
    {
        return $this->hasMany(HealthCareList::class);
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

        static::creating(function ($hospitalCategory) {
            $hospitalCategory->position = static::max('position') + 1;
        });
    }
}
