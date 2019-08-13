<?php


namespace app\controllers;


class MainController extends AppController
{

    public function indexAction(){
        $this->setMeta(['title'=> 'Main','description'=>'MainDescription']);
        $name = "Alex";
        $age = 28;
        $this->set(compact('name','age'));
//        debug($this->meta);
    }

}