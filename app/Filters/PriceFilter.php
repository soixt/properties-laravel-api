<?php

namespace App\Filters;

class PriceFilter {
    public function handle ($query, $next) {
        if (request()->has('price_from') && request('price_from') != "") {
            $query->where('price', '>=', request('price_from'));
        }

        if (request()->has('price_to') && request('price_to') != "") {
            $query->where('price', '<=', request('price_to'));
        }

        return $next($query);
    }
}