<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoTimeStamp;

class Customer extends Model
{
    use AutoTimeStamp;
    protected $guarded = ['id'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';
}
