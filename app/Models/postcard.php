<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postcard extends Model
{
    protected $fillable = ['name', 'skill', 'bio' ,'tojo_id'];
    /** @use HasFactory<\Database\Factories\PostcardFactory> */
    use HasFactory;

    public function tojo()
    {
        return $this->belongsTo(Tojo::class);
    }
}
