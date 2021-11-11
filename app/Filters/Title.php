<?php

namespace App\Filters;

use Illuminate\Http\Request;

class Title extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->where($this->filterName(),'LIKE', '%' . request($this->filterName()) . '%');
    }
}
