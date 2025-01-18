<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use RuntimeException;

/**
 * Contract for a seekable stream.
 */
interface SeekableStream extends Stream
{
    /**
     * Seek to a position within the stream.
     *
     * @throws RuntimeException on failure.
     */
    public function seek(int $offset, int $whence = SEEK_SET) : void;

    /**
     * Retrieve the current position of the buffer's internal pointer.
     *
     * @throws RuntimeException on failure.
     */
    public function tell() : int;

    /**
     * Rewind the stream back to the beginning.
     *
     * @throws RuntimeException on failure.
     */
    public function rewind() : void;
}
