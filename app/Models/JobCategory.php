<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobCategory extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'position',
        'status',
        'main_category_id'
    ];


    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class);
    }

    public function jobLists()
    {
        return $this->hasMany(JobList::class);
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($jobCategory) {
            $jobCategory->position = static::max('position') + 1;
        });
    }
}
