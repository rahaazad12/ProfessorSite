<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Home
 *
 * @property int $id
 * @property string|null $bu1_path
 * @property string|null $bu2_path
 * @property string $bu
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Home newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Home newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Home query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Home whereBu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Home whereBu1Path($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Home whereBu2Path($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Home whereId($value)
 * @mixin \Eloquent
 */
class Home extends Model
{
    protected $fillable=[
        'bu1_path','bu2_path','bu'
            ];

    public $table = 'home';

    public $timestamps = false;
}
