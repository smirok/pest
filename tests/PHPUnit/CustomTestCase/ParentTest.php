<?php

declare(strict_types=1);

namespace Tests\CustomTestCase;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class ParentTest extends TestCase
{
    private function getEntity(): bool
    {
        return false;
    }

    #[Test]
    public function testOverrideMethod(): void
    {
        assertTrue($this->getEntity() || true);
    }
}
