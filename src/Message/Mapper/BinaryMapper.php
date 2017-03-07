<?php

namespace Kaperys\Financial\Message\Mapper;

use Kaperys\Financial\Container\PropertyAnnotationContainer;

/**
 * Class BinaryMapper
 *
 * @package Kaperys\Financial\Message\Mapper
 *
 * @author  Mike Kaperys <mike@kaperys.io>
 */
class BinaryMapper extends AbstractMapper
{

    /**
     * BinaryMapper constructor.
     *
     * @param PropertyAnnotationContainer $propertyAnnotationContainer the property annotation container
     */
    public function __construct(PropertyAnnotationContainer $propertyAnnotationContainer)
    {
        $this->propertyAnnotationContainer = $propertyAnnotationContainer;
    }

    /**
     * @inheritdoc
     */
    public function pack(string $data): string
    {
        // By this point we know the data is correct and valid, so just pack

        return 'packed data - alnum mapper';
    }

    /**
     * @inheritdoc
     */
    public function unpack(string $data): string
    {
        // TODO: Implement unpack() method.
    }
}