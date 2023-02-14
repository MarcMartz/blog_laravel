<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    //Relación uno a muchos inversa (Article-User)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación uno a muchos (Article-Comment)
    public function comment(){
        return $this->hasMany(Comment::class);
    }

    //Relación uno a muchos inversa (Article-Category)
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
