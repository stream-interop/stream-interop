<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use RuntimeException;

/**
 * Contract for readable streams.
 *
 * A readable stream is used when reading data from a "source". For example, reading
 * input from the console ("stdin").
 */
interface ReadableStream extends Stream
{
    /**
     * Retrieve content (in bytes) from the source.
     *
     * @param int<1,max> $length The number of bytes to retrieve.
     * @throws RuntimeException on failure.
     */
    public function read(int $length) : string;

    /**
     * Determines if the stream has read to end-of-file.
     *
     * @return boolean
     */
    public function eof() : bool;

    /**
     * Retrieve the remaining contents in the buffer.
     *
     * @throws RuntimeException on failure.
     */
    public function getContents() : string;
}
