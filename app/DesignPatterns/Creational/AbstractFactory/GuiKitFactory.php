<?php 

namespace App\DesignPatterns\Creational\AbstractFactory;

use App\DesignPatterns\Creational\AbstractFactory\Interfaces\GuiFactoryInterface;
use App\DesignPatterns\Creational\AbstractFactory\Factories\BootstrapFactory;
use App\DesignPatterns\Creational\AbstractFactory\Factories\SemanticUiFactory;


class GuiKitFactory
{
	public function getFactory($type): GuiFactoryInterface
	{
		switch($type)
		{
			case 'bootstrap':
				$factory = new BootstrapFactory();
				break;
			case 'semanticui':
				$factory = new SemanticUiFactory();
				break;
			default:
				throw new \Exception("Неизвестный тип фабрики [{$type}]");
		}

		return $factory;
	}
}