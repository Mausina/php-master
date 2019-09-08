<?php


namespace app\controllers;
use ishop\Cache;


class MainController extends AppController
{

    public function indexAction(){
        $this->setMeta(['title'=> 'Main','description'=>'MainDescription']);
        $cache = Cache::instanse();
//        $cache->set('test',$posts);
//
//        $data = $cache->get('test');
//        if(!$data){
//            $cache->set('test',$posts);
//        }
//        $this->set(compact('name','age','posts'));
    }

}