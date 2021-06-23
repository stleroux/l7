<?php

namespace App\Models;

use App\Models\User;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Like extends Model implements Searchable
{
     // use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function likeable()
    {
        return $this->morphTo();
    }

   public function getSearchResult(): SearchResult
   {
      if(Route::currentRouteName('') == 'admin.quickSearch' || Route::currentRouteName('') == 'admin.advSearch')
      {
         $url = route('admin.likes.show', $this->id);
      } else {
         $url = route('bugs.likes', $this->id);
      }

      return new SearchResult(
         $this,
         $this->likeable_type,
         $url
      );
   }

}
