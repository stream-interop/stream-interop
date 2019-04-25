<?php
declare(strict_types=1);

namespace Interop\Stream;

/**
 * Contract for "lockable" streams.
 *
 * A lockable stream is a stream that can be locked between operations. Examples of 
 * lockable streams can be file streams of database streams.
 *
 * @author Nathan Bishop (nbish11)
 * @copyright 2016 Nathan Bishop
 * @license MIT
 */
interface Lockable
{
    /**
     * @const integer Acquire a shared lock (reader).
     */
    const LOCK_SHARED = LOCK_SH;
    
    /**
     * @const integer Acquire an exclusive lock (writer).
     */
    const LOCK_EXCLUSIVE = LOCK_EX;
    
    /**
     * @const integer Release a lock (shared or exclusive).
     */
    const LOCK_RELEASE = LOCK_UN;
    
    /**
     * @const integer If we do not want Lockable::lock to block while locking.
     */
    const LOCK_NO_BLOCK = LOCK_NB;
    
    /**
     * Portable advisory locking.
     *
     * @param integer $operation One of the LOCK_* constants.
     * @throws \InvalidArgumentException If $operation is not provided with one of the LOCK_* constants.
     * @throws \RuntimeException If a lock could not be obtained.
     */
    public function lock(int $operation): void;
}
