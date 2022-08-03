<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // relasi dengan tabel post 1 to many
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
