<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'content'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function pots(): BelongsTo {
        return $this->belongsTo(Post::class);
    }
    
}
