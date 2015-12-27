<?php

namespace Eos\Repository\Transformer;

use League\Fractal\TransformerAbstract;
use Eos\Repository\Contracts\Transformable;

/**
 * Class ModelTransformer
 * @package Eos\Repository\Transformer
 */
class ModelTransformer extends TransformerAbstract
{
  public function transform(Transformable $model)
  {
    return $model->transform();
  }
}
