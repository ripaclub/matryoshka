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
 * Interface DeletableCriteriaInterface
 */
interface DeletableCriteriaInterface
{


    /**
     * @param ModelInterface $model
     * @param array $data
     */
    public function applyDelete(ModelInterface $model);
}
