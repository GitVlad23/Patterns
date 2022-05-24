<?php 

namespace App\DesignPatterns\Fundamental\EventChannel;

use App\DesignPatterns\Fundamental\EventChannel\Classes\EventChannel;
use App\DesignPatterns\Fundamental\EventChannel\Classes\Publisher;
use App\DesignPatterns\Fundamental\EventChannel\Classes\Subscriber;


class EventChannelJob
{
	public function run()
	{
		$newsChannel = new EventChannel();


		$highgardenGroup = new Publisher('highgarden-news', $newsChannel);

		$winterfellNews = new Publisher('winterfell-news', $newsChannel);
		$winterfellDaily = new Publisher('winterfell-news', $newsChannel);


		$vasya = new Subscriber('Vasya Pupkin');
		$vlad = new Subscriber('Vlad Chernyy');
		$roxy = new Subscriber('Roxanne Chernyy');
		$sergei = new Subscriber('Sergei Dolgov');


		$newsChannel->subscribe('highgarden-news', $vlad);
		$newsChannel->subscribe('highgarden-news', $roxy);

		$newsChannel->subscribe('winterfell-news', $vasya);
		$newsChannel->subscribe('highgarden-news', $vasya);

		$newsChannel->subscribe('winterfell-news', $sergei);


		$highgardenGroup->publish('New highgarden post!');
		$winterfellNews->publish('New winterfell post!');
		$winterfellDaily->publish('New alternative winterfell post!');
	}
}