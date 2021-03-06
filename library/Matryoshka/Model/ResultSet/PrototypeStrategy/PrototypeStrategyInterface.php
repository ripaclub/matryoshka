<?php
/**
 * Matryoshka
 *
 * @link        https://github.com/matryoshka-model/matryoshka
 * @copyright   Copyright (c) 2014, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */
namespace Matryoshka\Model\ResultSet\PrototypeStrategy;

interface PrototypeStrategyInterface
{

    /**
     * @param object $objectPrototype
     * @param array $context
     */
    public function createObject($objectPrototype, array $context = null);

}