<?php
/**
 * Matryoshka
 *
 * @link        https://github.com/matryoshka-model/matryoshka
 * @copyright   Copyright (c) 2014, Ripa Club
 * @license     http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */
namespace Matryoshka\Model\Hydrator\Strategy;

use Zend\Stdlib\Hydrator\Strategy\StrategyInterface;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;
use Matryoshka\Model\Exception;

class HasOne implements StrategyInterface
{

    /**
     * @var HydratorAwareInterface
     */
    protected $objectPrototype;

    /**
     * Ctor
     *
     * @param $objectPrototype
     */
    public function __construct(HydratorAwareInterface $objectPrototype)
    {
        $this->objectPrototype = $objectPrototype;
    }

    /**
     * @return HydratorAwareInterface
     */
    public function getObjectPrototype()
    {
        return $this->objectPrototype;
    }

    /**
     * Converts the given value so that it can be extracted by the hydrator.
     *
     * @param mixed $value The original value.
     * @param object $object (optional) The original object for context.
     * @return mixed Returns the value that should be extracted.
     */
    public function extract($value)
    {
        if (null === $value) {
            return [];
        }

        if (is_array($value)) {
            return $value;
        }

        $objectPrototype = $this->getObjectPrototype();

        if ($value instanceof $objectPrototype) {
            return $objectPrototype->getHydrator()->extract($value);
        }

        throw new Exception\InvalidArgumentException('Invalid value: must be null, an array or an instance of '. get_class($objectPrototype));
     }

    /**
     * Converts the given value so that it can be hydrated by the hydrator.
     *
     * @param mixed $value The original value.
     * @param array $data (optional) The original data for context.
     * @return mixed Returns the value that should be hydrated.
     */
    public function hydrate($value)
    {
        $objectPrototype = $this->getObjectPrototype();

        if (is_array($value)) {
            $object = clone $objectPrototype;
            return $object->getHydrator()->hydrate($value, $object);
        } elseif ($value instanceof $objectPrototype) {
            return clone $value;
        } elseif (null === $value) {
            return clone $objectPrototype;
        }

        throw new Exception\InvalidArgumentException('Invalid value: must be null, an array or an instance of '. get_class($objectPrototype));
    }
}