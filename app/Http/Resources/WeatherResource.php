<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'weather_name' => $this->weather_name,
            'temperature' => $this->temperature,
            'wind_speed' => $this->wind_speed,
            'pressure' => $this->pressure,
            'humidity' => $this->humidity,
            'chance_of_precipitation' => $this->chance_of_precipitation,
            'created_at' => $this->created_at,
            'city_id' => $this->city_id
        ];
    }
}
