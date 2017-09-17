<?php

class Person
{

	private $firstName;

	private $lastName;

	private $birthDate;

	private $gender;

	public function __construct(string $firstName, string $lastName, DateTime $birthDate, string $gender)
	{
		$this->firstName = $firstName;
		$this->lastName  = $lastName;
		$this->birthDate = $birthDate;
		$this->gender    = $gender;
	}

	public function getFirstName(): string
	{
	    return $this->firstName;
	}

	public function setFirstName(string $firstName)
	{
	    $this->firstName = $firstName;
	}

	public function getLastName(): string 
	{
	    return $this->lastName;
	}
	
	public function setLastName(string $lastName) 
	{
	    $this->lastName = $lastName;
	}

	public function setAge(DateTime $birthDate)
	{
		$this->birthDate = $birthDate;
	}

	public function getAge(): inte
	{
		$today = new DateTime();
		$diff = $today->diff($this->birthDate);
		return $diff->y;
	}

	public function setGender(string $gender)
	{
		$this->gender = $gender;
	}

	public function getGender(string $gender)
	{
		return $this->gender;
	}

}

$sam = new Person('name', 'surname', new DateTime('1983-05-12'),'male');
echo $sam->getAge();

//var_dump($sam);