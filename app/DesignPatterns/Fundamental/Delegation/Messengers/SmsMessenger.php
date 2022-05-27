<?php 

namespace App\DesignPatterns\Fundamental\Delegation\Messengers;


class SmsMessenger extends AbstractMessenger
{
	public function send(): bool
	{
		return parent::send();
	}
}