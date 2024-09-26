<?php

namespace App\Models;

use App\HasReferenceNumber;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyList extends Model
{
    use HasFactory, SoftDeletes, Sluggable;
    use HasReferenceNumber;

    protected $fillable = [
        'registered_user_id',
        'property_category_id',
        'title',
        'reference_no',
        'rate',
        'description',
        'slug',
        'map_url',
        'address',
        'position',
        'is_rent',
        'bed_room',
        'bathroom',
        'internet',
        'parking',
        'area',
        'kitchen_type',
        'deposit',
        'features',
        'is_featured',
        'status',
    ];

    public function propertyCategory()
    {
        return $this->belongsTo(PropertyCategory::class);
    }

    public function registeredUser()
    {
        return $this->belongsTo(RegisteredUser::class);
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

        static::creating(function ($propertyList) {
            $propertyList->position = static::max('position') + 1;
        });
    }

    public function files()
    {
        return $this->morphMany(File::class, 'model');
    }

    // public function generateReferenceNumber()
    // {
    //     $randomNumber = rand(1000, 9999);
    //     return 'VEH-' . $randomNumber . '-' . now()->format('Ymd');
    // }
   
}
