<?php

namespace App\Traits;

use App\Models\Item;
use App\Models\SubCategory;
use Illuminate\Support\Str;

trait Sluggable
{
    public static function bootSluggable()
    {
        static::saving(function ($model) {
            $separator = '-';
            $klass = get_class($model);

            if ($klass == SubCategory::class) {
                $model->slug =  self::slug($model->category->name . $separator . $model->name);
            } else if ($klass == ChildCategory::class) {
                $model->slug =  self::slug(
                    $model->category->name .
                        $separator .
                        $model->sub_category->name .
                        $separator .
                        $model->name
                );
            } else if ($klass == Item::class) {
                // $model->slug =  self::slug(
                //     $model->name
                //         . $separator
                //         . Hashids::encode($model->user_id . $model->id . $model->category_id . $model->sub_category_id)
                //         . $separator
                //         . time()
                // );
            } else if ($klass == Seller::class) {
                $model->slug =  self::slug($model->id.$separator.$model->name);
            } else if ($model->name) {
                $model->slug =  self::slug($model->name);
            } else if ($model->title) {
                $model->slug =  self::slug($model->title);
            }
        });
    }

    private static function slug($string, $separator = '-')
    {
        $slug = mb_strtolower(preg_replace('/([?]|\p{P}|\s)+/u', $separator, $string));
        return trim($slug, $separator);
    }
}
