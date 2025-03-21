<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EntertainmentCategory extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'title',
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

    public function entertainmentLists()
    {
        return $this->hasMany(EntertainmentList::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($entertainmentCategory) {
            $entertainmentCategory->position = static::max('position') + 1;
            $entertainmentCategory->title = $entertainmentCategory->type;

        });
    }
}


