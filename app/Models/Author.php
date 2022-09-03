<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $fillable = ['id', 'first_name', 'middle_name', 'last_name'];

    public function books()
    {
        return $this->belongsToMany(Books::class, 'book_author', 'author_id', 'book_id');
    }
}
