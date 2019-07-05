<?php


namespace ishop;


class Registry
{
    use TSingletone;

    protected static $propreties = [];

    public function setProperty($name,$value){
        self::$propreties[$name] = $value;
    }

    public function getProperty($name){

        if (isset(self::$propreties[$name])){
            return self::$propreties[$name];
        }
        return null;
    }

    public function getProperties() {
        return self::$propreties;
    }
}