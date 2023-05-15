<?php

namespace App\Services;

use App\Models\Property;
use Illuminate\Pipeline\Pipeline;

class SearchPropertiesService {
    public function handle () {
        $query = Property::query();

        return app(Pipeline::class)
            ->send($query)
            ->through([
                \App\Filters\NameFilter::class,
                \App\Filters\PriceFilter::class,
                \App\Filters\BedroomsFilter::class,
                \App\Filters\BathroomsFilter::class,
                \App\Filters\StoreysFilter::class,
                \App\Filters\GaragesFilter::class,
            ])
            ->thenReturn()
            ->get();
    }
}