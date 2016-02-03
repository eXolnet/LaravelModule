<?php namespace Exolnet\Console;

use Exolnet\Console\Commands\FillModel;
use Exolnet\Console\Commands\GenerateModels;
use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->commands([
			FillModel::class,
			GenerateModels::class,
		]);
	}
}
