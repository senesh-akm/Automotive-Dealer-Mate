<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $table = 'subscriptions';

    protected $fillable = [
        'blog_id',
        'email',
    ];

    public $incrementing = true;

    protected $keyType = 'int';

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
