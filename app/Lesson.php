<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Lesson
 *
 * @property int $id
 * @property string $name
 * @property string $sample
 * @property string $ppt
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson wherePpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Lesson whereSample($value)
 * @mixin \Eloquent
 */
class Lesson extends Model
{
    protected $fillable=[
        'name','sample','ppt'
    ];

    public $timestamps = false;
}
