<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

/**
 * Contract for a seekable streams.
 *
 * @author Nathan Bishop (nbish11)
 * @copyright 2019 Nathan Bishop
 * @license MIT
 */
interface Seekable
{
    /**
     * @const integer Set position equal to offset bytes.
     */
    const SEEK_SET = SEEK_SET;

    /**
     * @const integer Set position to current location plus offset.
     */
    const SEEK_CURRENT = SEEK_CUR;

    /**
     * @const integer Set position to end-of-file plus offset.
     */
    const SEEK_END = SEEK_END;

    /**
     * Retrieve the size of contents in buffer.
     *
     * @throws \RuntimeException If the stream is closed.
     * @return integer Returns the size of the buffer in bytes.
     */
    public function getSize(): int;

    /**
     * Seek to a position within the stream.
     *
     * @param integer $offset The position to seek to.
     * @param integer $whence One of the SEEK_* constants.
     * @throws \RuntimeException If the stream is closed.
     * @throws \InvalidArgumentException If $whence is not a SEEK_* constant.
     */
    public function seek(int $offset, int $whence = self::SEEK_SET): void;

    /**
     * Retrieve the current position of the buffer's internal pointer.
     *
     * @return integer
     */
    public function tell(): int;

    /**
     * Rewind the stream back to the beginning.
     */
    public function rewind(): void;
}
