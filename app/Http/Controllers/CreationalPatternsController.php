<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Creational\AbstractFactory\AbstractFactory;
use Illuminate\Http\Request;

class CreationalPatternsController extends Controller
{
    public function AbstractFactory()
    {
        $name = 'Абстрактная фабрика';


        $item = new AbstractFactory('semanticui');
        $item->getResult();    
    }
}
