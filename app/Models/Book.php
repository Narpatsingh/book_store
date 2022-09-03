<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = ['id', 'title','description', 'total_pages','author_id', 'image_url', 'isbn', 'published_date'];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
