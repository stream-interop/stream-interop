<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

use Stringable;

interface StringableStream extends Stream
{
    public function __toString() : string;
}
