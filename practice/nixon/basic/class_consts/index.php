<?php
//Defining constants within a class.

Translator::lookup();

class Translator
{
	const ENGLISH = 0;
	const FRENCH = 1;
	const GERMAN = 2;
	const SPANISH = 3;
	
	static function lookup()
	{
		echo self::FRENCH;
	}
}
?>