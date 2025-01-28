<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use RuntimeException;

use const SEEK_CUR;
use const SEEK_END;
use const SEEK_SET;

/**
 * If the encapsulated resource is not seekable at the time it becomes
 * available to the SeekableStream, implementations MUST throw LogicException
 * (or an extension thereof).
 */
interface SeekableStream extends Stream
{
    /**
     * Moves the stream pointer position to the beginning of the stream as if
     * by rewind().
     *
     * @throws RuntimeException on failure.
     */
    public function rewind() : void;

    /**
     * Moves the stream pointer position to the $offset as if by fseek().
     *
     * @param SEEK_CUR|SEEK_SET|SEEK_END $whence
     * @throws RuntimeException on failure.
     */
    public function seek(int $offset, int $whence = SEEK_SET) : void;

    /**
     * Returns the current stream pointer position as if by ftell().
     *
     * @throws RuntimeException on failure.
     */
    public function tell() : int;
}
