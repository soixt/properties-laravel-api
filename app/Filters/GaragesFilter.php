<?php

namespace App\Filters;

class GaragesFilter {
    public function handle ($query, $next) {
        if (request()->has('garages') && request('garages') != "") {
            $query->whereGarages(request('garages'));
        }

        return $next($query);
    }
}