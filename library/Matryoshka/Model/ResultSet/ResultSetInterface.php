<?php
/**
 * Matryoshka
 *
 * @link        https://github.com/matryoshka-model/matryoshka
 * @copyright   Copyright (c) 2014, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */
namespace Matryoshka\Model\ResultSet;

use Countable;
use Traversable;

interface ResultSetInterface extends Traversable, Countable
{

    /**
     * Can be anything traversable|array
     * @abstract
     * @param $dataSource
     * @return mixed
     */
    public function initialize($dataSource);

    /**
     * Set the item object prototype
     *
     * @param  object $objectPrototype
     * @throws Exception\InvalidArgumentException
     * @return ResultSetInterface
     */
    public function setObjectPrototype($objectPrototype);

    /**
     * Get the item object prototype
     *
     * @return mixed
     */
    public function getObjectPrototype();

    /**
     * Cast result set to array of arrays
     *
     * @return array
     */
    public function toArray();

}