<?php

namespace Jackalope;

use PHPCR\PropertyType;

class PropertyTest extends TestCase
{
    public function provideGetNode()
    {
        return array(
            array(
                array('1234-1234', '4321-4321'),
                array(),
                'Internal Error: Could not find a referenced node. If the referencing node is a frozen version, this can happen, otherwise it would be a bug.',
            ),
            array(
                array('1234-1234', '4321-4321'),
                array('1234-1234'),
                'Internal Error: Could not find a referenced node. If the referencing node is a frozen version, this can happen, otherwise it would be a bug.',
            ),
            array(
                array('1234-1234', '4321-4321'),
                array('1234-1234', '4321-4321'),
            ),
            array(
                array('1234-1234', '4321-4321'),
                array('4321-4321', '1234-1234'),
                'Internal Error: Could not find a referenced node. If the referencing node is a frozen version, this can happen, otherwise it would be a bug.',
            ),
        );
    }

    /**
     * @dataProvider provideGetNode
     */
    public function testGetNode($values, $nodeUuids, $exceptionMessage = null)
    {
        if ($exceptionMessage) {
            $this->setExpectedException('PHPCR\RepositoryException', $exceptionMessage);
        }

        $nodes = new \ArrayObject();

        foreach ($nodeUuids as $nodeUuid) {
            $nodes[$nodeUuid] = $this->getNodeMock();
            $nodes[$nodeUuid]
                ->expects($this->any())
                ->method('getIdentifier')
                ->will($this->returnValue($nodeUuid))
            ;
        }

        $data = array(
            'type' => PropertyType::REFERENCE, 'value' => $values,
        );
        $factory = new Factory();
        $session = $this->getSessionMock();
        $objectManager = $this->getObjectManagerMock(array(
            'getNodesByIdentifier' => $nodes
        ));
        $property = new Property($factory, $data, '/path/to', $session, $objectManager);
        $property->getNode();
    }

    public function testTypeInstances()
    {
        $this->markTestSkipped('Port this over to test property types and the helper type conversions');
        /*
        $val = new Value('undefined', '');
        $this->assertSame(\PHPCR_PropertyType::UNDEFINED, $val->getType());
        $val = new Value('String', '');
        $this->assertSame(\PHPCR_PropertyType::STRING, $val->getType());
        $this->setExpectedException('\Jackalope\NotImplementedException');
        $val = new Value('Binary', '');
        // $this->assertSame(\PHPCR_PropertyType::BINARY, $val->getType());
        $val = new Value('Long', '');
        $this->assertSame(\PHPCR_PropertyType::LONG, $val->getType());
        $val = new Value('Double', '');
        $this->assertSame(\PHPCR_PropertyType::DOUBLE, $val->getType());
        $this->setExpectedException('\Jackalope\NotImplementedException');
        $val = new Value('Date', '');
        // $this->assertSame(\PHPCR_PropertyType::DATE, $val->getType());
        $val = new Value('Boolean', '');
        $this->assertSame(\PHPCR_PropertyType::BOOLEAN, $val->getType());
        $val = new Value('Name', '');
        $this->assertSame(\PHPCR_PropertyType::NAME, $val->getType());
        $val = new Value('Path', '');
        $this->assertSame(\PHPCR_PropertyType::PATH, $val->getType());
        $val = new Value('Reference', '');
        $this->assertSame(\PHPCR_PropertyType::REFERENCE, $val->getType());
        $val = new Value('WeakReference', '');
        $this->assertSame(\PHPCR_PropertyType::WEAKREFERENCE, $val->getType());
        $val = new Value('URI', '');
        $this->assertSame(\PHPCR_PropertyType::URI, $val->getType());
        $val = new Value('Decimal', '');
        $this->assertSame(\PHPCR_PropertyType::DECIMAL, $val->getType());
        $this->setExpectedException('InvalidArgumentException');
        new Value('InvalidArgument', '');
        */
    }

    public function testBaseConversions()
    {
        $this->markTestSkipped('Port this over to test property types and the helper type conversions');
        /*
        $val = new Value('String', '1.1');
        $this->assertSame('1.1', $val->getString());
        $this->assertSame(1, $val->getLong());
        $this->assertSame(1.1, $val->getDecimal());
        $this->assertSame(1.1, $val->getDouble());
        $this->assertSame(false, $val->getBoolean());

        $val = new Value('String', 'TrUe');
        $this->assertSame(true, $val->getBoolean());
        */
    }
}
