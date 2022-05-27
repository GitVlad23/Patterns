<?php 

namespace App\DesignPatterns\Creational\AbstractFactory;

use App\DesignPatterns\Creational\AbstractFactory\GuiKitFactory;


class AbstractFactory
{
	private $guiKit;

	public function __construct($type)
	{
		$this->guiKit = (new GuiKitFactory())->getFactory($type);
	}

	public function getResult()
	{
		$result[] = $this->guiKit->buildButton()->draw();
		$result[] = $this->guiKit->buildCheckBox()->draw();

		dd($result);
	}
}