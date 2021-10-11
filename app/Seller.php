<?php

namespace App;

use App\Models\SellerBusinessAddress;
use App\Models\SellerProfile;
use App\Models\SellerReturnAddress;
use App\Models\Transaction;
use App\Traits\AutoTimeStamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Seller extends Model
{
    use Notifiable, AutoTimeStamp;

    protected $guarded = ['id'];


    protected $hidden = [
        'password', 'remember_token', 'id',
    ];

    public function items()
    {
        return $this->hasMany(Item::class, 'seller_id');
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetail::class, 'seller_id');
    }

    public function transactions()
    {
        // return $this->hasMany(Transaction::class, 'seller_id');
    }

    public function profile()
    {
        return $this->hasOne(SellerProfile::class, 'seller_id', 'id');
    }

    public function businessAddress()
    {
        return $this->hasOne(SellerBusinessAddress::class, 'seller_id', 'id');
    }

    public function returnAddress()
    {
        return $this->hasOne(SellerReturnAddress::class, 'seller_id', 'id');
    }
}
