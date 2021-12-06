<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static orderBy(string $string, string $string1)
 */
class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'todo',
        'description',
        'user_id'
        ];


    public function tag()
    {
        return $this->belongsTo(Tag::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
