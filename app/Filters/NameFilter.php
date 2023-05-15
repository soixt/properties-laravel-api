<?php

namespace App\Filters;

class NameFilter {
    public function handle ($query, $next) {
        if (request()->has('name') && request('name') != "") {
            $query->where('name', 'like', '%' . request('name') . '%');
        }

        return $next($query);
    }
}