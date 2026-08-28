<?php
/**
 * Tests for ThriveNexus
 */

use PHPUnit\Framework\TestCase;
use Thrivenexus\Thrivenexus;

class ThrivenexusTest extends TestCase {
    private Thrivenexus $instance;

    protected function setUp(): void {
        $this->instance = new Thrivenexus(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Thrivenexus::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
