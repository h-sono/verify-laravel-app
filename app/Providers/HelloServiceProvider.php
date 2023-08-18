<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Composers\HelloComposer;

class HelloServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap services.
   */
  public function boot()
  {
    View::composer(
      'hello.index',
      HelloComposer::class
    );
  }
}
