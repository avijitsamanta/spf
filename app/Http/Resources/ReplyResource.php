<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ReplyResource extends Resource
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

                'id'            => $this->id,
                'reply'         => $this->body,
                'user'          => $this->user->name,
                'user_id'       => $this->user_id,
                'question_slug' => $this->question->slug,
                'question_id'   => $this->question_id,
                'like_count'    => $this->like->count(),
                'created_at'    => $this->created_at->diffForHumans()
        ];
    }
}
