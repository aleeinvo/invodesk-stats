<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TimeSlotResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'activeTime' => $this->activeTime,
            "inactiveTime" => $this->inactiveTime,
            "durationMinutes" => $this->durationMinutes,
            "isSynced" => $this->isSynced,
            "beginDate" => $this->beginDate,
            "endDate" =>  $this->endDate,
            "day" => $this->day
        ];
    }
}
