<?php

namespace App\Models;

use App\Delivery;
use App\Traits\AutoTimeStamp;
use Illuminate\Database\Eloquent\Model;



class Agent extends Model
{
    use AutoTimeStamp;

    protected $guarded = ['id'];

    protected $fillable = [
        'type',
        'name',
        'delivery_id',
        'contact_person',
        'logo',
        'nid_number',
        'bank_name',
        'bankaccountnumber',
        'bikashnumber',
        'address',
        'education'
    ];

    public function delivery()
    {
        return $this->belongsTo(Delivery::class, 'delivery_id');
    }

    public function allocatedArea()
    {
        return $this->hasOne(AgentAllocatedArea::class, 'agent_id', 'id');
    }

    public function extendArea()
    {
        return $this->hasOne(AgentExtendArea::class, 'agent_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'delivery_agent_id');
    }

    public function order_items()
    {
        return $this->hasManyThrough(OrderItem::class, Order::class, 'delivery_agent_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'agent_id');
    }
}
