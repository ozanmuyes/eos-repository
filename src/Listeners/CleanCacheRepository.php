<?php

namespace Eos\Repository\Listeners;

use Eos\Repository\Helpers\CacheKeys;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Eos\Repository\Events\RepositoryEventBase;
use Eos\Repository\Contracts\RepositoryInterface;
use Illuminate\Contracts\Cache\Repository as CacheRepository;

/**
 * Class CleanCacheRepository
 * @package Eos\Repository\Listeners
 */
class CleanCacheRepository
{
  /**
   * @var CacheRepository
   */
  protected $cache = null;

  /**
   * @var RepositoryInterface
   */
  protected $repository = null;

  /**
   * @var Model
   */
  protected $model = null;

  /**
   * @var string
   */
  protected $action = null;

  /**
   *
   */
  public function __construct()
  {
    $this->cache = app(config('repository.cache.repository', 'cache'));
  }

  /**
   * @param RepositoryEventBase $event
   */
  public function handle(RepositoryEventBase $event)
  {
    try {
      $cleanEnabled = config("repository.cache.clean.enabled", true);

      if ($cleanEnabled) {
        $this->repository = $event->getRepository();
        $this->model = $event->getModel();
        $this->action = $event->getAction();

        if (config("repository.cache.clean.on.{$this->action}", true)) {
          $cacheKeys = CacheKeys::getKeys(get_class($this->repository));

          if (is_array($cacheKeys)) {
            foreach ($cacheKeys as $key) {
              $this->cache->forget($key);
            }
          }
        }
      }
    } catch (\Exception $e) {
      logger()->error($e->getMessage());
    }
  }
}
