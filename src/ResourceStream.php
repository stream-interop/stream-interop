<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

interface ResourceStream extends Stream
{
    /**
     * Represents the resource as if opened by fopen(), fsockopen(), popen(),
     * etc.
     *
     * It MUST be a resource of type (stream); for example, as determined by
     * get_resource_type().
     *
     * It SHOULD NOT be publicly settable, either as a property or via property
     * hook or method.
     *
     * @var resource
     */
    public mixed $resource { get; }
}
