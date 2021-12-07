<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static updateOrCreate(array $array, array $array1)
 * @method static find($id)
 * @method static orderBy(string $string, string $string1)
 * @method static latest()
 * @method static where(string $string, string $string1, string $string2)
 */
class Post extends Model
{
    protected $fillable = [
        'title','description','user_id','category'
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
