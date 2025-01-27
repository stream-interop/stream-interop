<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use RuntimeException;

interface ClosableStream extends Stream
{
    /**
     * Closes the encapsulated resource as if by fclose(), pclose(), etc.
     *
     * @throws RuntimeException on failure.
     */
    public function close() : void;
}
