<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'address' => $this->address,
            'category' => $this->category,
            'bed_room' => $this->bed_room,
            'bath_room' => $this->bath_room,
            'gallery' => $this->gallery,
            'score' => $this->score,
            'review' => $this->review,
            'utility_heating' => $this->utility_heating,
            'utility_wifi' => $this->utility_wifi,
            'utility_patio' => $this->utility_patio,
            'kitchen_fridge' => $this->kitchen_fridge,
            'kitchen_oven' => $this->kitchen_oven,
            'kitchen_stove' => $this->kitchen_stove,
            'kitchen_potspans' => $this->kitchen_potspans,
            'kitchen_microwave' => $this->kitchen_microwave,
            'kitchen_dishwasher' => $this->kitchen_dishwasher,
            'bathroom_shower' => $this->bathroom_shower,
            'bathroom_sink' => $this->bathroom_sink,
            'bathroom_toilet' => $this->bathroom_toilet,
            'bathroom_bathtub' => $this->bathroom_bathtub,
            'bathroom_window' => $this->bathroom_window,
        ];
    }
}
