<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use StreamInterop\Interface\Readable;
use StreamInterop\Interface\Writable;

/**
 * Contract for a "duplex" stream.
 *
 * A duplex stream is both readable and writable and is commonly used with handling TCP sockets or files.
 *
 * @author Nathan Bishop (nbish11)
 * @copyright 2019 Nathan Bishop
 * @license MIT
 */
interface Duplex extends Readable, Writable
{
}
