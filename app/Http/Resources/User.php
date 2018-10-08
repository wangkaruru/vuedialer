<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
 
            'user_id' => $this->user_id,
            'full_name' => $this->full_name,
            'user_level' => $this->user_level,
            'user_group' => $this->user_group
            
        ]
        
        ;
    }

    }

