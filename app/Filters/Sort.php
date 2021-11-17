<?php

namespace App\Filters;

class Sort extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where($this->filterName(), request()->get($this->filterName()));
    }

}
