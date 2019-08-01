<?php
declare(strict_types=1);

namespace Interop\Stream;

use Interop\Stream\Writable;
use Interop\Stream\Seekable;

/**
 * Contract for a stream that can be both seeked into and written to.
 *
 * @author Nathan Bishop (nbish11)
 * @copyright 2019 Nathan Bishop
 * @license MIT
 */
interface WriteAndSeek extends Writable, Seekable
{

}
