<?php

namespace App;

use App\Category;
use App\Reply;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
   public function getRouteKeyName()
   {
   		return 'slug';

   }

   protected $fillable = ['title','slug','body','user_id','category_id'];

   public function user()
   {
   	 return $this->belongsTo(User::class);
   }

   public function replies()
   {
   	 return $this->hasMany(Reply::class);
   }

   public function category()
   {
   	 return $this->belongsTo(Category::class);
   }

   public function getPathAttribute()
   {
   	 return "/question/$this->slug";
   }
}
