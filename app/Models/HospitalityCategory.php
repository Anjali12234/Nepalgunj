<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HospitalityCategory extends Model
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

    public function hospitalityLists()
    {
        return $this->hasMany(HospitalityList::class);
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'type'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($hospitalityCategory) {
            $hospitalityCategory->position = static::max('position') + 1;
            $hospitalityCategory->title_en = $hospitalityCategory->type;
        });
    }
}
