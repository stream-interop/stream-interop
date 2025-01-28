<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use RuntimeException;

/**
 * If the encapsulated resource is not readable at the time it becomes
 * available to the ReadableStream, implementations MUST throw LogicException
 * (or an extension thereof).
 */
interface ReadableStream extends Stream
{
    /**
     * Tests for end-of-file on the encapsulated resource as if by feof().
     */
    public function eof() : bool;

    /**
     * Returns up to $length bytes from the encapsulated resource as if by
     * fread().
     *
     * @param int<1,max> $length
     * @throws RuntimeException on failure.
     */
    public function read(int $length) : string;

    /**
     * Returns the remaining contents of the resource from the current pointer
     * position as if by stream_get_contents().
     *
     * @throws RuntimeException on failure.
     */
    public function getContents() : string;
}
