<?php

namespace App\Filters;

class BathroomsFilter {
    public function handle ($query, $next) {
        if (request()->has('bathrooms') && request('bathrooms') != "") {
            $query->whereBathrooms(request('bathrooms'));
        }

        return $next($query);
    }
}