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

class JobList extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    use HasReferenceNumber;

    protected $fillable = [
        'job_category_id',
        'registered_user_id',
        'reference_no',
        'slug',
        'position',
        'post',
        'details',
        'map_url',
        'facebook_url',
        'whats_app_no',
        'website_url',
        'image',
        'status',
        'address',
        'job_name',
        'contact_number',
        'job_type',
        'category',
        'years_of_experience',
        'gender',
        'salary_range',
        'deadline_date',
        'publish_date',
        'desired_skills_experience',
    ];

    public function jobCategory()
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function registeredUser()
    {
        return $this->belongsTo(RegisteredUser::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'job_name'
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

        static::creating(function ($jobList) {
            $jobList->position = static::max('position') + 1;
        });
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('jobList', 'public') : null,
        );
    }
    public function generateReferenceNumber()
    {
        $name = strtoupper(Str::substr($this->job_name, 0, 3));
        $randomNumber = rand(1000, 9999);
        return $name . '-' . $randomNumber;
    }
}
