<?php

abstract class Person
{
	abstract public function greet();
}

class English extends Person
{
	public function greet()
	{
		return 'Hello!';
	}
}

class German extends Person
{
	public function greet()
	{
		return 'Hallo!';
	}
}

class French extends Person
{
	public function greet()
	{
		return 'Bonjour!';
	}
}

class Chinese extends Person
{
	public function greet()
	{
		return 'Nǐ hǎo!';
	}
}

class Japanese extends Person
{
	public function greet()
	{
		return "Kon'nichiwa!";
	}
}

class Spanish extends Person
{
	public function greet()
	{
		return "Hola!";
	}
}

class Arabic extends Person
{
	public function greet()
	{
		return "Marhaba!";
	}
}

class Italian extends Person
{
	public function greet()
	{
		return "Ciao!";
	}
}

function greeting($people)
{
	foreach ($people as $person) {
		echo $person->greet() . '<br>';
	}
}

$people = [
	new English(),
    new Spanish(),
	new German(),
	new French(),
    new Arabic(),
    new Italian(),
    new Japanese(),
    new Chinese()
];

greeting($people);

?>