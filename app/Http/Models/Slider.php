<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliderss extends Model
{
    protected $fillable = [
        'image','position', 'short_desc', 'offer_desc', 'color', 'link'
    ];
}
