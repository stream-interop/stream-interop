<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

interface SizableStream extends Stream
{
    /**
     * @return ?int<0, max>
     */
    public function getSize() : ?int;
}
