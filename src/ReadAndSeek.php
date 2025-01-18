<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use StreamInterop\Interface\Readable;
use StreamInterop\Interface\Seekable;

/**
 * Contract for a stream that can be both seeked into and read from.
 *
 * @author Nathan Bishop (nbish11)
 * @copyright 2019 Nathan Bishop
 * @license MIT
 */
interface ReadAndSeek extends Readable, Seekable
{

}
