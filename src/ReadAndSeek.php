<?php
declare(strict_types=1);

namespace Interop\Stream;

use Interop\Stream\Readable;
use Interop\Stream\Seekable;

/**
 * Contract for a stream that can be both seeked into and read from.
 *
 * @author Nathan Bishop (nbish11)
 * @copyright 2019 Nathan Bishop
 * @license MIT
 */
interface ReadAndSeek implements Readable, Seekable
{

}
