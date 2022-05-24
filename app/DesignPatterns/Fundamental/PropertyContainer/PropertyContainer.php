<?php 

namespace App\DesignPatterns\Fundamental\PropertyContainer;

use App\DesignPatterns\Fundamental\PropertyContainer\Interfaces\PropertyContainerInterface;

/**
 * Class PropertyContainer
 * 
 * @package App\Design\Patterns\Fundamental\PropertyContainer
 * 
 * @url https://ru.wikipedia.org/wiki/Контейнер_свойств_(шаблон_проектирования)
 * 
 * @url http://192.168.3.5:8000\fundamentals\property-container
 * */
class PropertyContainer implements PropertyContainerInterface
{
	private $propertyContainer = [];


	public function addProperty($propertyName, $value)
	{
		$this->propertyContainer[$propertyName] = $value;
	}

	public function deleteProperty($propertyName)
	{
		unset($this->propertyContainer[$propertyName]);
	}

	public function getProperty($propertyName)
	{
		return $this->propertyContainer[$propertyName] ?? null;
	}

	public function setProperty($propertyName, $value)
	{
		if(!isset($this->propertyContainer[$propertyName]))
		{
			throw new \Exception("Property [[$propertyName]] not found");
		}

		$this->propertyContainer[$propertyName] = $value;
	}
}