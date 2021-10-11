<?php

namespace App;

use App\Traits\AutoTimeStamp;
use Illuminate\Database\Eloquent\Model;

class Submodule extends Model
{
    use  AutoTimeStamp;

    protected $guarded = ['id'];

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'submodule_id', 'id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }
}
