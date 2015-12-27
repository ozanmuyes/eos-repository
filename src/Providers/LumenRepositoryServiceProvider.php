<?php

namespace Eos\Repository\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LumenRepositoryServiceProvider
 * @package Eos\Repository\Providers
 */
class LumenRepositoryServiceProvider extends ServiceProvider
{
  /**
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $this->commands('Eos\Repository\Generators\Commands\RepositoryCommand');
    $this->app->register('Eos\Repository\Providers\EventServiceProvider');
  }

  /**
   * Get the services provided by the provider.
   *
   * @return array
   */
  public function provides()
  {
    return [];
  }
}
