<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ResearchHead
 *
 * @property int $id
 * @property string $name
 * @property string $exp
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\SubResearchHead[] $sub_research_heads
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchHead newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchHead newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchHead query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchHead whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchHead whereExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchHead whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchHead whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchHead whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ResearchHead whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ResearchHead extends Model
{
    protected $fillable=[
      'name','exp','image',
    ];

    public function sub_research_heads()
    {
        return $this->hasMany(SubResearchHead::class);
    }
}
