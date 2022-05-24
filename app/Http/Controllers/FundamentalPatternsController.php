<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Fundamental\PropertyContainer\BlogPost;
use App\DesignPatterns\Fundamental\PropertyContainer\PropertyContainer;
use App\DesignPatterns\Fundamental\Delegation\AppMessenger;
use App\DesignPatterns\Fundamental\EventChannel\EventChannelJob;
use Illuminate\Http\Request;

class FundamentalPatternsController extends Controller
{
    public function PropertyContainer()
    {
        $name = 'Контейнер свойств';


        $item = new BlogPost();

        $item->setTitle('Заголовок статьи');
        $item->setCategory(10);

        $item->addProperty('view_count', 100);

        $item->addProperty('last_update', '2020-02-01');
        $item->setProperty('last_update', '2020-02-02');

        $item->addProperty('read_only', true);
        $item->deleteProperty('read_only');

        dd($item);
    }

    public function Delegation()
    {
        $name = 'Делегирование';


        $item = new AppMessenger();

        $item->setSender('sender@mail.ru')
             ->setRecipient('recipient@mail.ru')
             ->setMessage('Hello Email messenger!')
             ->send();

        dump($item);

        $item->toSms()
             ->setSender('sender.1111@mail.ru')
             ->setRecipient('recipient.1111@mail.ru')
             ->setMessage('Hello SMS messenger!')
             ->send();

        dd($item);
    }

    public function EventChannel()
    {
        $name = 'Канал событий';


        $item = new EventChannelJob();
        $item->run();
    }
}
