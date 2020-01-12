<?php
namespace calamary;
class Registry{
    use TSingltone;
    
    public static $properties = [];
    
    public function setProperty($name, $value){
        self::$properties[$name] = $value;
    }
    
    public function getProperty ($name) {
        if(isset(self::$properties[$name])){ //если существует
            return self::$pproperties[$name];   //то возвращает его
        }
        return null;
    }
    
    public function getProperties(){
        return self::$properties;
    }
}