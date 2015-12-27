<?php

namespace Eos\Repository\Events;

/**
 * Class RepositoryEntityUpdated
 * @package Eos\Repository\Events
 */
class RepositoryEntityUpdated extends RepositoryEventBase
{
  /**
   * @var string
   */
  protected $action = "updated";
}
