<?php

namespace App\Models;

use App\Models\Progress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'genre',
        'page_count',
        'status' // should include the fillable fields otherwise cannot save to db
    ];

    public function progress() {
        return $this->hasMany(Progress::class);
    }
}
