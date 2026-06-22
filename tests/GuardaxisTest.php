<?php
/**
 * Tests for GuardAxis
 */

use PHPUnit\Framework\TestCase;
use Guardaxis\Guardaxis;

class GuardaxisTest extends TestCase {
    private Guardaxis $instance;

    protected function setUp(): void {
        $this->instance = new Guardaxis(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Guardaxis::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
