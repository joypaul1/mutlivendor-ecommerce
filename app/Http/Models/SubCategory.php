<?php

namespace App\Models;

use App\Traits\AutoTimeStamp;
use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use AutoTimeStamp, Sluggable;

    protected $guarded = ['id'];

    public function items()
    {
        return $this->hasMany(Item::class,'sub_category_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function child_categories()
    {
        return $this->hasMany(ChildCategory::class, 'subcategory_id');
    }


}
