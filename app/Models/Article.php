<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'article_tags');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
