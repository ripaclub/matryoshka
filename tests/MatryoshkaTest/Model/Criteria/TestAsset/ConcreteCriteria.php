<?php
/**
 * Matryoshka
 *
 * @link        https://github.com/matryoshka-model/matryoshka
 * @copyright   Copyright (c) 2014, Leonardo Di Donato <leodidonato at gmail dot com>, Leonardo Grasso <me at leonardograsso dot com>
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */
namespace MatryoshkaTest\Model\Criteria\TestAsset;

use Matryoshka\Model\Criteria\AbstractCriteria;
use Matryoshka\Model\ModelInterface;

class ConcreteCriteria extends AbstractCriteria
{
    public function apply(ModelInterface $model)
    {
        return [];
    }
}