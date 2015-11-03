<?php
/**
 * EvaEngine (http://evaengine.com/)
 * A development engine based on Phalcon Framework.
 *
 * @copyright Copyright (c) 2014-2015 EvaEngine Team (https://github.com/EvaEngine/EvaEngine)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Eva\EvaEngine\Exception;

/**
 * Out Of Range Exception
 * @package Eva\EvaEngine\Exception
 */
class UnsupportedOperationException extends LogicException
{
    /**
     * @var int
     */
    protected $statusCode = 405;
}