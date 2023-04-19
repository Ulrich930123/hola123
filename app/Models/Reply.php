<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $fillable=['autor','id_post','reply'];
    public function post(){
        return $this->belongsTo(Post::class);
    }
    
}
