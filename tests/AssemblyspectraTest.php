<?php
/**
 * Tests for AssemblySpectra
 */

use PHPUnit\Framework\TestCase;
use Assemblyspectra\Assemblyspectra;

class AssemblyspectraTest extends TestCase {
    private Assemblyspectra $instance;

    protected function setUp(): void {
        $this->instance = new Assemblyspectra(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Assemblyspectra::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
