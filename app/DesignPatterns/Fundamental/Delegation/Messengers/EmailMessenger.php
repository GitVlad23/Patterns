<?php 

namespace App\DesignPatterns\Fundamental\Delegation\Messengers;


class EmailMessenger extends AbstractMessenger
{
	public function send(): bool
	{
		return parent::send();
	}
}