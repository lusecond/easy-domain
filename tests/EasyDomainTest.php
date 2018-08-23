<?php

//declare(strict_types=1);

namespace Lusecond\EasyDomain\Tests;

use PHPUnit\Framework\TestCase;
use Lusecond\EasyDomain\EasyDomain;

class EasyDomainTest extends TestCase {

    public function testCannotBeSayHello() {
        $hello = new EasyDomain;
        $this->expectOutputString($hello->hello());
        print $hello->hello();
    }

}
