<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

interface ResourceStream extends Stream
{
    /**
     * @var resource
     */
    public mixed $resource { get; }
}
