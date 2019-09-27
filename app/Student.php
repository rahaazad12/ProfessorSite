<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Student
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $student_number
 * @property string $image
 * @property string $grade
 * @property int $valid
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Research[] $researches
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereStudentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereValid($value)
 * @mixin \Eloquent
 */
class Student extends Model
{
    protected $fillable = [
        'id', 'first_name', 'last_name', 'student_number', 'image', 'grade', 'valid'
    ];

    function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    function researches()
    {
        return $this->hasMany(Research::class);
    }
}
