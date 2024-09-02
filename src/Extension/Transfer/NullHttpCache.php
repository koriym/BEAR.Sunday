<?php

declare(strict_types=1);

namespace BEAR\Sunday\Extension\Transfer;

final class NullHttpCache implements HttpCacheInterface
{
    /**
     * {@inheritDoc}
     */
    public function isNotModified(array $server): bool
    {
        return false;
    }

    public function transfer(): void
    {
    }
}
