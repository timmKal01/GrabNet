<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tojo extends Model
{
    protected $fillable = [
        'name',
        'description',
        'location',
    ];
    /** @use HasFactory<\Database\Factories\TojoFactory> */
    use HasFactory;

    public function postcards()
    {
        return $this->hasMany(Postcard::class);
    }
}
