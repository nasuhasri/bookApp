<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Progress extends Model
{
    use HasFactory;

    protected $table = 'progress_details'; // tell this model to use this table in db

    protected $fillable = [
        'reading_progress',
        'start_date',
        'completion_date'
    ];

    public function book() {
        return $this->belongsTo(Book::class);
    }
}
