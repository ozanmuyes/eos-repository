<?php

namespace Eos\Repository\Contracts;

/**
 * Interface Presentable
 * @package Eos\Repository\Contracts
 */
interface Presentable
{
  /**
   * @param PresenterInterface $presenter
   * @return mixed
   */
  public function setPresenter(PresenterInterface $presenter);

  /**
   * @return mixed
   */
  public function presenter();
}
