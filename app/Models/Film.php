<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'cover',
        'writers',
        'audience',
        'length',
        'trailer',
        'release_date',
        'categories'
    ];

    use HasFactory;
}
