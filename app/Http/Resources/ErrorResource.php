<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ErrorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $isjson = false;
        if (strcmp($this->type, 'json') == 0){
            $isjson = true;
        }

        return [
            ($isjson) ?  json_decode($this->value) : $this->value
        ];
    }
}
