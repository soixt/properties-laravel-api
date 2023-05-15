<?php

namespace App\Services;

use App\Models\Property;
use Illuminate\Http\Request;

class SearchPropertiesService {
    public function handle (Request $request) {
        // Maybe use piplenine here

        return Property::all();
    }
}