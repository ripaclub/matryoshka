<?php
namespace MatryoshkaTest\Model\Object;

class AbstractObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testGetHydrator()
    {
        $abstractObject = $this->getMockForAbstractClass('\Matryoshka\Model\Object\AbstractObject');
        $this->assertInstanceOf('\Zend\Stdlib\Hydrator\ObjectProperty', $abstractObject->getHydrator());
    }

    public function testGetInputFilter()
    {
        $abstractObject = $this->getMockForAbstractClass('\Matryoshka\Model\Object\AbstractObject');
        $this->assertInstanceOf('\Zend\InputFilter\InputFilter', $abstractObject->getInputFilter());
    }
}