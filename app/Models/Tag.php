<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(string $string, string $string1)
 */
class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function todos()
    {
        return $this->hasMany(Todo::class);

    }
}
