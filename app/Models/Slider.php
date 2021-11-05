<?php

namespace App\Models;

use App\Traits\AutoTimeStamp;
use App\Traits\GlobalScope;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    Use AutoTimeStamp, GlobalScope;

    protected $fillable = [
        'image','position', 'short_desc', 'offer_desc', 'color', 'link'
    ];
}
