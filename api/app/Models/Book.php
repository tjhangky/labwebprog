<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function author()
    {
        return $this->hasOne(Author::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
