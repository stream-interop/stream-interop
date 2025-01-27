<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use RuntimeException;

/**
 * If the encapsulated resource is not writable at the time it becomes
 * available to the WritableStream, implementations MUST throw
 * InvalidArgumentException.
 */
interface WritableStream extends Stream
{
    /**
     * Writes $data starting at the current stream pointer position, returning
     * the number of bytes written, as if by fwrite().
     *
     * @throws RuntimeException on failure.
     */
    public function write(string|Stringable $data) : int;
}
