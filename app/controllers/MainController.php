<?php


namespace app\controllers;


//use RedBeanPHP\R;

class MainController extends AppController
{

    public function indexAction(){
        $posts = \R::findAll('test');

        $this->setMeta(['title'=> 'Main','description'=>'MainDescription']);
        $name = "Alex";
        $age = 28;
        $this->set(compact('name','age','posts'));
//        debug($this->meta);
    }

}