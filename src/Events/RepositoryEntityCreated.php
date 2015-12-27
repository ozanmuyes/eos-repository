<?php

namespace Eos\Repository\Events;

/**
 * Class RepositoryEntityCreated
 * @package Eos\Repository\Events
 */
class RepositoryEntityCreated extends RepositoryEventBase
{
  /**
   * @var string
   */
  protected $action = "created";
}
