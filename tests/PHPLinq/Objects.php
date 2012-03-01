<?php

namespace PHPLinq\Tests;

class ObjectsTest extends \PHPUnit_Framework_TestCase
{
	public function testBasic()
	{
		$names = array("John", "Peter", "Joe", "Patrick", "Donald", "Eric"); 
		$result = \from('$name')->in($names)->where('$name => strlen($name) < 5')->select('$name');
		
		$this->assertEquals(array('John', 'Joe', 'Eric'), $result);
	}
}