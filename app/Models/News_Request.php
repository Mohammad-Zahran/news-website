<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News_Request extends Model
{
    protected $fillable = ['user_id', 'news_title', 'description', 'status',];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
