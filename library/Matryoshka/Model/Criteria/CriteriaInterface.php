<?php
/**
 * Matryoshka
 *
 * @link        https://github.com/matryoshka-model/matryoshka
 * @copyright   Copyright (c) 2014, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */
namespace Matryoshka\Model\Criteria;

use Matryoshka\Model\ModelInterface;

/**
 * Interface CriteriaInterface
 *
 * Criteria is an "user query intefarce" from an API point of view,
 * acting as mediator between model and datagateway.
 */
interface CriteriaInterface
{
    /**
     * Apply
     * @param ModelInterface $model
     * @return mixed
     */
    public function apply(ModelInterface $model);
}
