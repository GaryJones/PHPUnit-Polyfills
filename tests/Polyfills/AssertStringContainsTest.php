<?php

namespace Yoast\PHPUnitPolyfills\Tests\Polyfills;

use PHPUnit\Framework\TestCase;
use Yoast\PHPUnitPolyfills\Polyfills\AssertStringContains;

/**
 * Availability test for the functions polyfilled by the AssertStringContains trait.
 *
 * @covers \Yoast\PHPUnitPolyfills\Polyfills\AssertStringContains
 */
class AssertStringContainsTest extends TestCase {

	use AssertStringContains;

	/**
	 * Verify availability of the assertStringContainsString() method.
	 *
	 * @return void
	 */
	public function testAssertStringContainsString() {
		$this->assertStringContainsString( 'foo', 'foobar' );
	}

	/**
	 * Verify availability of the assertStringContainsStringIgnoringCase() method.
	 *
	 * @return void
	 */
	public function testAssertStringContainsStringIgnoringCase() {
		self::assertStringContainsStringIgnoringCase( 'Foo', 'foobar' );
	}

	/**
	 * Verify availability of the assertStringNotContainsString() method.
	 *
	 * @return void
	 */
	public function testAssertStringNotContainsString() {
		self::assertStringNotContainsString( 'Foo', 'foobar' );
	}

	/**
	 * Verify availability of the assertStringNotContainsStringIgnoringCase() method.
	 *
	 * @return void
	 */
	public function testAssertStringNotContainsStringIgnoringCase() {
		$this->assertStringNotContainsStringIgnoringCase( 'Baz', 'foobar' );
	}

	/**
	 * Verify availability of the assertStringContainsString() method with empty string.
	 *
	 * @return void
	 */
	public function testAssertStringContainsEmptyString() {
		$this->assertStringContainsString( '', 'foobar' );
	}

	/**
	 * Verify availability of the assertStringContainsStringIgnoringCase() method with empty string.
	 *
	 * @return void
	 */
	public function testAssertStringContainsEmptyStringIgnoringCase() {
		self::assertStringContainsStringIgnoringCase( '', 'foobar' );
	}

	/**
	 * Verify availability of the assertStringNotContainsString() method with empty string.
	 *
	 * @return void
	 */
	public function testAssertStringNotContainsEmptyString() {
		self::assertStringNotContainsString( '', 'foobar' );
	}

	/**
	 * Verify availability of the assertStringNotContainsStringIgnoringCase() method with empty string.
	 *
	 * @return void
	 */
	public function testAssertStringNotContainsEmptyStringIgnoringCase() {
		$this->assertStringNotContainsStringIgnoringCase( '', 'foobar' );
	}
}
