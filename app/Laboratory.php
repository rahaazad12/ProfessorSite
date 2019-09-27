<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Laboratory
 *
 * @property int $id
 * @property string $name
 * @property string $exp
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laboratory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laboratory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laboratory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laboratory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laboratory whereExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laboratory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laboratory whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laboratory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Laboratory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Laboratory extends Model
{
    protected $fillable=[
        'name','exp','image'
    ];
}
