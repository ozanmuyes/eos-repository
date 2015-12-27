<?php

namespace Eos\Repository\Contracts;

/**
 * Interface PresenterInterface
 * @package Eos\Repository\Contracts
 */
interface PresenterInterface
{
  /**
   * Prepare data to present
   *
   * @param $data
   * @return mixed
   */
  public function present($data);
}
