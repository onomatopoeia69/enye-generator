<?php

namespace Onoma\EnyeGenerator;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Onoma\EnyeGenerator\Http\Livewire\Field;

class UiKitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
      $this->loadViewsFrom(__DIR__.'/../resources/views', 'enye');

      //for testing
      $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
      
      Livewire::component('field', Field::class);
   
    }
}
