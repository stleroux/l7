<?php

Route::get('darts',                                      'UI\Darts\DartsController@index')                              ->name('darts.index');

Route::get('darts/games/board',                          'UI\Darts\DartsController@board')                              ->name('darts.games.board');

Route::get('darts/games/selectTeamsOrPlayers/{gameID}',  'UI\Darts\GamesController@selectTeamsOrPlayers')               ->name('darts.games.selectTeamsOrPlayers');
Route::post('darts/games/storeTeamsOrPlayers',           'UI\Darts\GamesController@storeTeamsOrPlayers')                ->name('darts.games.storeTeamsOrPlayers');

Route::get('darts/games/selectTeamPlayers/{game_ID}',    'UI\Darts\GamesController@selectTeamPlayers')                  ->name('darts.games.selectTeamPlayers');
Route::post('darts/games/storeTeamPlayers',              'UI\Darts\GamesController@storeTeamPlayers')                   ->name('darts.games.storeTeamPlayers');

Route::get('darts/games/selectPlayers/{game_ID}',        'UI\Darts\GamesController@selectPlayers')                      ->name('darts.games.selectPlayers');
Route::post('darts/games/storePlayers',                  'UI\Darts\GamesController@storePlayers')                       ->name('darts.games.storePlayers');

Route::get('darts/games/create/',                        'UI\Darts\GamesController@create')                             ->name('darts.game.create');
Route::post('darts/games/',                              'UI\Darts\GamesController@store')                              ->name('darts.games.store');
Route::get('darts/games/{id}/show',                      'UI\Darts\GamesController@show')                               ->name('darts.games.show');
Route::get('darts/games/{key?}',                         'UI\Darts\GamesController@index')                              ->name('darts.games.index');
Route::get('darts/games/{id}/edit',                      'UI\Darts\GamesController@edit')                               ->name('darts.games.edit');
Route::put('darts/games/{id}',                           'UI\Darts\GamesController@update')                             ->name('darts.games.update');
Route::delete('darts/games/{id}',                        'UI\Darts\GamesController@destroy')                            ->name('darts.games.destroy');




Route::get('darts/01/teams/{id}',                        'UI\Darts\ZeroOne\TeamsController@index')                      ->name('darts.01.teams.index');
Route::post('darts/01/teams/store',                      'UI\Darts\ZeroOne\TeamsController@store')                      ->name('darts.01.teams.store');

Route::get('darts/01/players/{id}',                      'UI\Darts\ZeroOne\PlayersController@index')                    ->name('darts.01.players.index');
Route::post('darts/01/players/store',                    'UI\Darts\ZeroOne\PlayersController@store')                    ->name('darts.01.players.store');



Route::get('darts/cricket/teams/{id}',             'UI\Darts\Cricket\TeamsController@index')            ->name('darts.cricket.teams.index');
Route::get('darts/cricket/teams/completed/{id}',   'UI\Darts\Cricket\TeamsController@completed')        ->name('darts.cricket.teams.completed');
Route::post('darts/cricket/teams/store',           'UI\Darts\Cricket\TeamsController@store')            ->name('darts.cricket.teams.store');

Route::get('darts/cricket/players/{id}',          'UI\Darts\Cricket\PlayersController@index')         ->name('darts.cricket.players.index');
Route::get('darts/cricket/players/completed/{id}','UI\Darts\Cricket\PlayersController@completed')     ->name('darts.cricket.players.completed');
Route::post('darts/cricket/players/store',        'UI\Darts\Cricket\PlayersController@store')         ->name('darts.cricket.players.store');



Route::get('darts/baseball/players/{id}',          'UI\Darts\Baseball\PlayersController@index')         ->name('darts.baseball.players.index');
Route::get('darts/baseball/players/completed/{id}','UI\Darts\Baseball\PlayersController@completed')     ->name('darts.baseball.players.completed');
// Route::post('darts/baseball/players/store',        'UI\Darts\Baseball\PlayersController@store')         ->name('darts.baseball.players.store');


Route::get('darts/around/players/{id}',          'UI\Darts\Around\PlayersController@index')         ->name('darts.around.players.index');
Route::get('darts/around/players/completed/{id}','UI\Darts\Around\PlayersController@completed')     ->name('darts.around.players.completed');
//Route::post('darts/around/players/store',        'UI\Darts\Around\PlayersController@store')         ->name('darts.around.players.store');


Route::get('darts/castle/players/{id}',          'UI\Darts\Castle\PlayersController@index')         ->name('darts.castle.players.index');
Route::get('darts/castle/players/completed/{id}','UI\Darts\Castle\PlayersController@completed')     ->name('darts.castle.players.completed');
//Route::post('darts/around/players/store',        'UI\Darts\Around\PlayersController@store')         ->name('darts.around.players.store');