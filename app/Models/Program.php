<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'position',
        'status',
    ];

    public function educationLists()
    {
        return $this->hasMany(EducationList::class);
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

        static::creating(function ($program) {
            $program->position = static::max('position') + 1;
        });
    }
}
