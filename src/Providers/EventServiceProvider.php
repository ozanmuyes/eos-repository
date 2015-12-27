<?php

namespace Eos\Repository\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
  /**
   * The event handler mappings for the application.
   *
   * @var array
   */
  protected $listen = [
    'Eos\Repository\Events\RepositoryEntityCreated' => [
      'Eos\Repository\Listeners\CleanCacheRepository'
    ],
    'Eos\Repository\Events\RepositoryEntityUpdated' => [
      'Eos\Repository\Listeners\CleanCacheRepository'
    ],
    'Eos\Repository\Events\RepositoryEntityDeleted' => [
      'Eos\Repository\Listeners\CleanCacheRepository'
    ]
  ];
}
