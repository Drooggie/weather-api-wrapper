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
        $current = $this['currentConditions'];

        return [
            "address" => $this['resolvedAddress'],
            "timezone" => $this['timezone'],
            "description" => $this['description'],
            "condition" => $current['conditions'],
            "icon" => $current['icon'],
        ];
    }
}
