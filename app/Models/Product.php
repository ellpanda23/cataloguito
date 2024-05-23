<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, LogsActivity;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function scopeCategory($query, $category_id)
    {
        if ($category_id)
        {
            return $query->where('category_id', $category_id);
        }
    }

    // ACTIVITY LOG
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('Products')
        ->logOnly(['name', 'extract', 'description', 'price', 'category_id']);
        // Chain fluent methods for configuration options
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('product')->singleFile();
    }

}
