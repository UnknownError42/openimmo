<?php declare(strict_types = 1);

namespace Ujamii\OpenImmo\API;

use PHPUnit\Framework\TestCase;

class ImpressumStruktTest extends TestCase
{
    /** @var ImpressumStrukt */
    private $impressumStrukt;

    protected function setUp()
    {
        $this->impressumStrukt = new ImpressumStrukt();
    }

    public function testMissing()
    {
        $this->markTestIncomplete('Test not yet implemented');
    }
}
