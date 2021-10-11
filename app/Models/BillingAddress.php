<?php

namespace App\Models;

use App\Traits\AuthScopes;
use App\Traits\AutoTimeStamp;
use App\User;
use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    use AutoTimeStamp, AuthScopes;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function area()
    {
        return $this->belongsTo(PostCode::class, 'post_code_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'billing_address_id');
    }
}
