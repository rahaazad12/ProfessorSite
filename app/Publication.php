<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Publication
 *
 * @property int $id
 * @property string $name
 * @property string $writers
 * @property string $details
 * @property string $type
 * @property string $link
 * @property string $years
 * @property string $pdf
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication wherePdf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereWriters($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Publication whereYears($value)
 * @mixin \Eloquent
 */
class Publication extends Model
{
    protected $fillable=[
        'name','writers','details','type','link','years','pdf'
    ];
}
