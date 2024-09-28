<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\WeatherStoreRequest;
use App\Http\Resources\WeatherResource;
use App\Models\Weather;
use Illuminate\Http\Response;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return WeatherResource::collection(Weather::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WeatherStoreRequest $request)
    {
        $created_weather = Weather::create($request->validated());

        return new WeatherResource($created_weather);
    }

    /**
     * Display the specified resource.
     */
    public function show(Weather $weather)
    {
        return new WeatherResource($weather);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WeatherStoreRequest $request, Weather $weather)
    {
        $weather->update($request->validated());

        return new WeatherResource($weather);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weather $weather)
    {
        $weather->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
