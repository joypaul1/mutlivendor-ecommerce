<?php

namespace App;

use App\Traits\AutoTimeStamp;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use  AutoTimeStamp;

    protected $guarded = ['id'];

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'module_id', 'id');
    }

    public function submodules()
    {
        return $this->hasMany(Submodule::class, 'module_id', 'id');
    }
}
