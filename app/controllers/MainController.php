<?php


namespace app\controllers;


//use RedBeanPHP\R;

use ishop\Cache;

class MainController extends AppController
{

    public function indexAction(){
        $posts = \R::findAll('test');

        $this->setMeta(['title'=> 'Main','description'=>'MainDescription']);
        $cache = Cache::instanse();
//        $cache->set('test',$posts);

        $data = $cache->get('test');
        if(!$data){
            $cache->set('test',$posts);
        }
        $name = "Alex";
        $age = 28;
        $this->set(compact('name','age','posts'));
//        debug($this->meta);
    }

}