<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'education_list_id',
        'name',
        'post',
        'passed_year',
        'image',
        'description',

    ];

    public function educationList()
    {
        return $this->belongsTo(EducationList::class);
    }



}

