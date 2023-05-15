<?php

namespace App\Filters;

class BedroomsFilter {
    public function handle ($query, $next) {
        if (request()->has('bedrooms') && request('bedrooms') != "") {
            $query->whereBedrooms(request('bedrooms'));
        }

        return $next($query);
    }
}