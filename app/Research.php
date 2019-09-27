<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Research
 *
 * @property int $id
 * @property int $student_id
 * @property string $name
 * @property string $pdf
 * @property string $ppt
 * @property string $poster
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research wherePdf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research wherePoster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research wherePpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research whereStudentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Research whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Research extends Model
{
    protected $fillable=[
       'name','poster','pdf','ppt', 'student_id'
    ];
}
