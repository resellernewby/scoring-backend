<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScoreResource extends JsonResource
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
            'user_id' => $this->user->name,
            'classroom_id' => $this->classroom->name,
            'scoring_floor' => $this->scoring_floor,
            'scoring_table' => $this->scoring_table,
            'scoring_equipment' => $this->scoring_equipment,
            'scoring_total' => $this->scoring_total,
            'scoring_date' => $this->scoring_date->format('d-m-Y'),
        ];
    }
}
