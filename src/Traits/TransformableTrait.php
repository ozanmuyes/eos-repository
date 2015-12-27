<?php

namespace Eos\Repository\Traits;

/**
 * Class TransformableTrait
 * @package Eos\Repository\Traits
 */
trait TransformableTrait
{
  /**
   * @return array
   */
  public function transform()
  {
    return $this->toArray();
  }
}
