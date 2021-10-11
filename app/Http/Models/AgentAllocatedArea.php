<?php

namespace App\Models;

use App\Traits\AutoTimeStamp;
use App\Models\Agent;

use Illuminate\Database\Eloquent\Model;

class AgentAllocatedArea extends Model
{
    use AutoTimeStamp;
    protected $guarded = ['id'];
    protected $table = 'agent_allocated_areas';

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id', 'id');
    }

    //multi data
    public function posts()
    {
        return $this->belongsToMany(PostCode::class, 'allocated_post', 'allocated_id', 'post_id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function postCode()
    {
        return $this->belongsTo(PostCode::class, 'post_id');
    }
}
