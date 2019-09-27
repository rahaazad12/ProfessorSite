<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SubResearchHead
 *
 * @property int $id
 * @property int $research_head_id
 * @property string $name
 * @property string $exp
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubResearchHead newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubResearchHead newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubResearchHead query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubResearchHead whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubResearchHead whereExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubResearchHead whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubResearchHead whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubResearchHead whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubResearchHead whereResearchHeadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\SubResearchHead whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubResearchHead extends Model
{
    protected $fillable=[
        'name','exp','image','research_head_id'
    ];
}
