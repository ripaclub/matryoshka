<?php
/**
 * Matryoshka
 *
 * @link        https://github.com/ripaclub/matryoshka
 * @copyright   Copyright (c) 2014, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */
namespace Matryoshka\Model\ResultSet;

use Zend\Stdlib\Hydrator\HydratorAwareInterface;

interface HydratingResultSetInterface extends ResultSetInterface, HydratorAwareInterface
{

}