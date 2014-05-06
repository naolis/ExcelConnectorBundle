<?php

namespace Pim\Bundle\ExcelConnectorBundle\Excel\Reader;

/**
 * Creates ValueTransformer objects
 *
 * @author    Antoine Guigan <antoine@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ValueTransformerFactory
{
    /**
     * Constructor
     *
     * @param DateTransformer $dateTransformer
     * @param string          $transformerClass The class of the created objects
     */
    public function __construct(DateTransformer $dateTransformer, $transformerClass)
    {
        throw new \Exception('NOT IMPLEMENTED');
    }

    /**
     * Creates a value transformer
     *
     * @param SharedStrings $sharedStrings
     *
     * @return ValueTransformer
     */
    public function create(SharedStrings $sharedStrings, Styles $styles)
    {
        throw new \Exception('NOT IMPLEMENTED');
    }
}
