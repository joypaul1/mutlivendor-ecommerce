<?php

namespace App\Models;

use App\Traits\AuthScopes;
use App\Traits\AutoTimeStamp;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use AutoTimeStamp, AuthScopes;

    protected $guarded = ['id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function billing_address()
    {
        return $this->belongsTo(BillingAddress::class, 'billing_address_id');
    }

    public function delivery_address()
    {
        return $this->belongsTo(DeliveryAddress::class, 'delivery_address_id');
    }

    public function user_coupon()
    {
        return $this->belongsTo(UserCoupon::class, 'user_coupon_id');
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function delivery_agent()
    {
        return $this->belongsTo(Agent::class, 'delivery_agent_id');
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

    public function histories()
    {
        return $this->hasMany(OrderHistory::class, 'order_id');
    }

    public function agent_suggest_orders()
    {
        return $this->hasMany(AgentSuggestOrder::class, 'order_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'order_id');
    }

    public function getTotalAttribute($v)
    {
        return round($v);
    }

    // public function setOrderDateAttribute()
    // {
    //     $this->attributes['order_date'] = Carbon::createFromFormat('m-d-Y', $value)->format('m-d-Y');
    // }

}
