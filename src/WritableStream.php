<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use RuntimeException;
use Stringable;

/**
 * Contract for a writable stream.
 *
 * A writeable stream is used when writing data to a "destination". For
 * example, writing to a console's ("stdout") or ("stderr") stream or when 
 * creating HTTP requests, on the client.
 */
interface WritableStream extends Stream
{
    /**
     * Write data to the stream.
     *
     * @param string|Stringable $data The content to be written to the stream.
     * @throws RuntimeException If the stream could not be written to. (E.g. stream was closed.)
     * @return integer The number of bytes written to the stream.
     */
    public function write(string|Stringable $data) : int;
}
