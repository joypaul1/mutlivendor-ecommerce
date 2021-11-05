<?php
namespace App\Traits;
use Illuminate\Database\Eloquent\Builder;

trait GlobalScope
{
    public function scopeDataDesc(Builder $query, $field )
    {
        if(!$field){
           return  $query->orderBy('date', 'DESC');
        }
        return  $query->orderBy($field, 'DESC');
    }
    public function scopeDataAsc(Builder $query, $field )
    {
        if(!$field){
           return  $query->orderBy('date');
        }
        return  $query->orderBy($field);
    }

    public function scopeWhereLike(Builder $query, $fields, $searchTerm )
    {
        if(!$fields){
            $query->orWhere($fields, 'LIKE', "%{$searchTerm}%");
        }
        //  return  $query->orderBy($field);
    }
}
