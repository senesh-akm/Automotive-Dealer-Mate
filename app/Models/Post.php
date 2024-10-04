<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'vehicle_id',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
