<?php

use PHPUnit\Framework\TestCase;

class ClassNameParserTest extends TestCase {

	/**
	 * @param $expected
	 * @param $input
	 */
	private function assertClassName( $expected, $input ) {
		$this->assertEquals( $expected, class_name_parser( $input ) );
	}

	public function testEmptyArray() {
		$this->assertClassName( "", array() );
	}

	public function testStringArray() {
		$this->assertClassName( "", "" );
	}

	public function testTrueKeyValues() {


		$classes = array(
			'first' => true
		);

		$this->assertClassName( "first", $classes );

	}

	public function testFalseKeyValues() {


		$classes = array(
			'first' => false
		);

		$this->assertClassName( "", $classes );

	}

	public function testTrueKeyValues_twoClasses() {


		$classes = array(
			'first' => true,
			'second' => false,
		);

		$this->assertClassName( "first", $classes );

	}

	public function testTrueKeyValues_twoClassesTrue() {


		$classes = array(
			'first' => true,
			'second' => true,
		);

		$this->assertClassName( "first second", $classes );

	}

	public function testAdditional_class() {


		$classes = array(
			'first' => true,
			'second' => true,
		);

		$this->assertEquals( "first second additional", class_name_parser($classes, "additional") );

	}

	public function testArrayOfClasses(){
		$this->assertClassName( "first", array('first') );
	}

}