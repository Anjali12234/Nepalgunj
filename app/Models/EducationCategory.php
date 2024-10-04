<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducationCategory extends Model
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

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'type'
            ]
        ];
    }

    public function educationLists()
    {
        return $this->hasMany(EducationList::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($educationCategory) {
            $educationCategory->position = static::max('position') + 1;
            $educationCategory->title_en = $educationCategory->type;

        });
    }
}
