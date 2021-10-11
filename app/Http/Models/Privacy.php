<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoTimeStamp;
use App\Traits\Sluggable;

class Privacy extends Model
{
    use AutoTimeStamp, Sluggable;
    protected $guarded = ['id'];
}
