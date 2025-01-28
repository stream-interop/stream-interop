<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use Stringable;

interface StringableStream extends Stream, Stringable
{
    /**
     * Returns the entire contents of the encapsulated resource as if by
     * rewind()ing before returning stream_get_contents().
     */
    public function __toString() : string;
}
