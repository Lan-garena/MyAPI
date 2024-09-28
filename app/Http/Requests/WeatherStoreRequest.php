<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeatherStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'weather_name' => 'required|max:255|string',
            'temperature' => 'required|max:255|string',
            'wind_speed' => 'required|max:255|string',
            'pressure' => 'required|max:255|string',
            'humidity' => 'required|max:255|string',
            'chance_of_precipitation' => 'required|max:255|string',
            'city_id' => 'required|max:255|string|unique:weather,city_id',
        ];
    }
}
