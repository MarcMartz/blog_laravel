<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    //Relación uno a muchos inversa (Comment-User)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación uno a muchos inversa (Comment-Article)
    public function article(){
        return $this->belongsTo(Article::class);
    }
}
