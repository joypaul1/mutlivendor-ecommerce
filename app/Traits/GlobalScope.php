<?php
namespace App\Traits;
use Illuminate\Database\Eloquent\Builder;


//don't remove or edit anything you can add method only
trait GlobalScope
{
    public function active(Builder $query, $field)
    {
        if(!$field){
            $query->where('status', true);
        }
        $query->where($field, true);
    }

    public function scopeInActive(Builder $query, $field)
    {
        if(!$field){
            $query->where('status', false);
        }
        $query->where($field, false);
    }

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
