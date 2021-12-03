<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static updateOrCreate(array $array, array $array1)
 * @method static where(array $where)
 */
class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code',
        'author'
    ];
}
