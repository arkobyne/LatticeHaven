<?php
/**
 * Tests for LatticeHaven
 */

use PHPUnit\Framework\TestCase;
use Latticehaven\Latticehaven;

class LatticehavenTest extends TestCase {
    private Latticehaven $instance;

    protected function setUp(): void {
        $this->instance = new Latticehaven(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Latticehaven::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
