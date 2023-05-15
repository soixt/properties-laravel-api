<?php

namespace App\Http\Controllers;

use App\Http\Resources\PropertyResource;
use App\Services\SearchPropertiesService;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function __invoke (Request $request, SearchPropertiesService $service)
    {
        return PropertyResource::collection(
            $service->handle($request)
        );
    }
}
