<?php

namespace App\Filters;

class DefaultSort
{
    public function handle($request, \Closure $next)
    {
        $builder = $next($request);

        return $builder->orderBy('created_at', 'desc');

    }
}
