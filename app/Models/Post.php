<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Post extends Model
{
    use HasFactory;
   /**
    * Get the user that owns the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */


    protected $table = "posts";
    protected $fillable = ['cover_imageg','title','slug','body','meta_description','published_at','featured','category_id','author_id'];
   public function user(): BelongsTo
   {
       return $this->belongsTo(User::class,'author_id')->withDefault('Admin User');
   }

   /**
    * Get the user that owns the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function category(): BelongsTo
   {
       return $this->belongsTo(Category::class);
   }

   /**
    * The roles that belong to the Post
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function tags(): BelongsToMany
   {
       return $this->belongsToMany(Tag::class,'post_tag');
   }
}
