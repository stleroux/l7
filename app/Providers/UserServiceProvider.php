<?php

namespace App\Providers;

use App\Models\User;
// use App\Models\Mylinks;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
	/**
	* Register services.
	*
	* @return void
	*/
	public function register()
	{
		//
	}

	/**
	* Bootstrap services.
	*
	* @return void
	*/
	public function boot()
	{

	}

}
