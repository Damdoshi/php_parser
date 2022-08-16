<?php

use PHPUnit\Framework\TestCase;
require (__DIR__."/../../php_parser.php");

class ToolsTest extends TestCase
{
    public function testBunnyReadText()
    {
	$index = 0;
	$data = "int main(void)";
	$this->assertSame(false, bunny_check_text($data, $index, "float"));
	$this->assertSame(false, bunny_read_text($data, $index, "float"));
	$this->assertSame(true, bunny_check_text($data, $index, "int"));
	$this->assertSame(0, $index);
	$this->assertSame(true, bunny_read_text($data, $index, "int"));
	$this->assertSame(3, $index);
    }
    public function testBunnyReadChar()
    {
	extract($GLOBALS);

	$index = 0;
	$data = "int main(void)";
	$this->assertSame(false, bunny_check_char($data, $index, " \t\n"));
	$this->assertSame(false, bunny_read_char($data, $index, " \t\n"));
	$this->assertSame(true, bunny_check_char($data, $index, $SymbolStart));
	$this->assertSame(0, $index);
	$this->assertSame(true, bunny_read_char($data, $index, $SymbolStart));
	$this->assertSame(3, $index);
    }
}
