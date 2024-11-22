<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'content', 'age_restriction', 'created_by'];

    public function user()
    {

        return $this->belongsTo(User::class);
    }
    
}
