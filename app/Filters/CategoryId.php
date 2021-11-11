<?php

namespace App\Filters;

class CategoryId extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where($this->filterName(), request()->get($this->filterName()));
    }
}
