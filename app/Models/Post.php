<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Specify the table if it's not the plural form of the model name
    protected $table = 'posts'; 

    // Define which attributes are mass assignable
    protected $fillable = [
        'title',
        'content',
        'image_path',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
