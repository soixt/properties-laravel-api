<?php

namespace App\Filters;

class StoreysFilter {
    public function handle ($query, $next) {
        if (request()->has('storeys') && request('storeys') != "") {
            $query->whereStoreys(request('storeys'));
        }

        return $next($query);
    }
}