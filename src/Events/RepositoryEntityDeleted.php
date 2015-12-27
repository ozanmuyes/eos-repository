<?php

namespace Eos\Repository\Events;

/**
 * Class RepositoryEntityDeleted
 * @package Eos\Repository\Events
 */
class RepositoryEntityDeleted extends RepositoryEventBase
{
  /**
   * @var string
   */
  protected $action = "deleted";
}
