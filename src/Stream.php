<?php
declare(strict_types=1);

namespace StreamInterop\Interface;

/**
 * @phpstan-type MetadataArray array{
 *     timed_out?:bool,
 *     blocked?:bool,
 *     eof?:bool,
 *     wrapper_data?:mixed[],
 *     wrapper_type?:string,
 *     stream_type:string,
 *     mode:string,
 *     unread_bytes:int,
 *     seekable:bool,
 *     uri?:string,
 *     crypto?:mixed[]
 * }
 * 
 * @see https://www.php.net/stream_get_meta_data
 * @see php-src/ext/standard/streamsfuncs.c PHP_FUNCTION(stream_get_meta_data)
 * @see php-src/ext/openssl/xp_ssl.c static int php_openssl_sockop_set_option
 */
interface Stream
{
    /**
     * @var MetadataArray
     */
    public array $metadata { get; }

    public function isClosed() : bool;

    public function isOpen() : bool;
}
