<?php


namespace ishop;


trait TSingletone
{

    private static $instance;

    public static function instanse(){
        if(self::$instance === null){
            self::$instance = new self;
        }

        return self::$instance;
    }
}