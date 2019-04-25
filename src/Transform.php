<?php
declare(strict_types=1);

namespace Interop\Stream;

use Interop\Stream\Duplex;

/**
 * Contract for a "transform" stream.
 *
 * A transform stream is a duplex stream where the output or input is 
 * manipulated in some way. Examples include compression, encryption or filtration.
 *
 * @author Nathan Bishop (nbish11)
 * @copyright 2019 Nathan Bishop
 * @license MIT
 */
interface Transform extends Duplex
{
    /**
     * Manipulate the stream in some form or another.
     *
     * @param string $buffer The data to transform.
     * @return string The transformed data.
     */
    public function transform(string $buffer): string;
}
