<?php

namespace Eos\Repository\Contracts;

/**
 * Interface CriteriaInterface
 * @package Eos\Repository\Contracts
 */
interface CriteriaInterface
{
  /**
   * Apply criteria in query repository
   *
   * @param $model
   * @param RepositoryInterface $repository
   * @return mixed
   */
  public function apply($model, RepositoryInterface $repository);
}
