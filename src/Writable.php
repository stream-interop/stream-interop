<?php
declare(strict_types=1);

namespace Interop\Stream;

/**
 * Contract for a write-only stream.
 *
 * A write-only stream is used when writing data to a "destination". For 
 * example, writing to a console's ("stdout") or ("stderr") stream or when 
 * creating HTTP requests, on the client.
 *
 * @author Nathan Bishop (nbish11)
 * @copyright 2019 Nathan Bishop
 * @license MIT
 */
interface Writable
{
    /**
     * Write data to the stream.
     *
     * @param string $data The content to be written to the stream.
     * @throws \RuntimeException If the stream could not be written to. (E.g. stream was closed.)
     * @return integer The number of bytes written to the stream.
     */
    public function write(string $data): int;
}
