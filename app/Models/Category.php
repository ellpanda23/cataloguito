<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
class Category extends Model
{
    use HasFactory, LogsActivity;

    protected $guarded = ['id'];

    // ACTIVITY LOG
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('Categories')
        ->logOnly(['name']);
        // Chain fluent methods for configuration options
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
