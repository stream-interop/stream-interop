<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use RuntimeException;

interface ClosableStream extends Stream
{
    /**
     * @throws RuntimeException on failure.
     */
    public function close() : void;
}
