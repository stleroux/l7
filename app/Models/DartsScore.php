<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DartsScore extends Model
{
   protected $table = "dart__scores";

   protected $fillable = [
      'user_id',
      'team_id',
      'game_id',
      'score',
      'remaining'
    ];

//////////////////////////////////////////////////////////////////////////////////////
// RELATIONSHIPS
//////////////////////////////////////////////////////////////////////////////////////
   public function player()
   {
     return $this->belongsTo(\App\Models\DartsPlayer::class, 'dart__players');
   }
   
   // public function game()
   // {
   //    return $this->belongsTo(\App\Models\Darts\Game::class, 'dart__games');
   // }

   // public function user()
   // {
   //    return $this->belongsTo(\App\Models\User::class, 'users');
   // }

}
