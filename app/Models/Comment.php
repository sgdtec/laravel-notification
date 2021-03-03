<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'user_id',
        'title',
        'content'
    ];

    public function post() {
        return $this->belongsTo(User::class);
    }

    public function user() {
        return $this->BelongsTo(User::class);
    }
}
