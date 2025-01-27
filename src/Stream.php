<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

/**
 * @phpstan-type MetadataArray array{
 *     timed_out: bool,
 *     blocked: bool,
 *     eof: bool,
 *     unread_bytes: int,
 *     stream_type: string,
 *     wrapper_type: string,
 *     wrapper_data: mixed,
 *     mode: string,
 *     seekable: bool,
 *     uri?: string,
 *     mediatype?: string,
 *     base64?: bool
 * }
 * 
 * @see https://github.com/phpstan/phpstan-src/blob/2.1.x/resources/functionMap.php#L12013
 */
interface Stream
{
    /**
     * Represents the metadata for the encapsulated resource as if by
     * stream_get_meta_data().
     *
     * It MUST provide the most-recent metadata for the encapsulated resource
     * at the moment of property access.
     *
     * It MUST NOT be publicly settable, either as a property or via property
     * hook or method.
     *
     * @var MetadataArray
     */
    public array $metadata { get; }

    /**
     * Returns true if the encapsulated resource has been closed, or false if not.
     */
    public function isClosed() : bool;

    /**
     * Returns true if the encapsulated resource is still open, or false if not.
     */
    public function isOpen() : bool;
}
