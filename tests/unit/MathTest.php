<?php
declare(strict_types=1);

namespace Bergau;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testAdd()
    {
        $math = new Math();
        self::assertEquals(5, $math->add(2, 3));
    }
}
