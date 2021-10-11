<?php

namespace App\Models;

use App\Traits\AutoTimeStamp;
use Illuminate\Database\Eloquent\Model;

class PostCode extends Model
{
    use AutoTimeStamp;
    protected $fillable = ['division_id', 'city_id', 'name'];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    //multi data
    public function allocated()
    {
        return $this->belongsToMany(AgentAllocatedArea::class, 'allocated_post', 'post_id', 'allocated_id');
    }

    public function extended()
    {
        return $this->belongsToMany(AgentExtendArea::class, 'extended_post', 'post_id', 'extended_id');
    }
}
