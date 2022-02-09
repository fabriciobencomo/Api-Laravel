<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function getExcerptAttribute()
    {
        return substr($this->content, 0, 100);
    }
    public function getPublishedAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
