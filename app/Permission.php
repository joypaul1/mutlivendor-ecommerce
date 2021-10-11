<?php

namespace App;

use App\Traits\AutoTimeStamp;
use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use  AutoTimeStamp, Sluggable;
    
    protected $guarded = 'id';

    protected $fillable = [
        'name', 'slug','module_id','submodule_id','parent','created_at','updated_at'
    ];

    public function roles() {

        return $this->belongsToMany(Role::class,'roles_permissions');
    }

    public function users() {

        return $this->belongsToMany(Admin::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }
    public function submodule()
    {
        return $this->belongsTo(Submodule::class, 'submodule_id', 'id');
    }
}
