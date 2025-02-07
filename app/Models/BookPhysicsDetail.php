<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookPhysicsDetail extends Model
{
    protected $fillable = [
        'pages',  'cover_type', 'book_id'
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

}
