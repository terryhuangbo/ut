<?php
/*
 * This file is part of the Money package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests;

use PHPUnit\Framework\TestCase;

class HbTest extends TestCase
{
    /**
     * @group hbtest
     */
    public function testFirst()
    {
        $this->assertEquals(12, 12);
    }
}
