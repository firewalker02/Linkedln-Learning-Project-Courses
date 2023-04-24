<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PetitionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //Data is being moidfied before being returned to the user. Therefore the PetitionResourcePHP file will convert data modified here
        //as a JSon Array
        return[
             "title"        => ucwords($this->title),
             'id'           => $this->id,
            'author'        => $this->author,
            'description'   => $this->description,
            'signees'       => $this->signees,
            'category'      => $this->category,

             ];


    }
}
