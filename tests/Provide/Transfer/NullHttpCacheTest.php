<?php

declare(strict_types=1);

namespace BEAR\Sunday\Provide\Transfer;

use BEAR\Sunday\Extension\Transfer\NullHttpCache;
use PHPUnit\Framework\TestCase;

class NullHttpCacheTest extends TestCase
{
    public function testNullError(): void
    {
        $httpCache = new NullHttpCache();
        $this->assertFalse($httpCache->isNotModified([]));
        $httpCache->transfer();
    }
}
