<?php

//Трэйт это фаил который мы когда используем мы буквально вставляем код из него.

namespace calamary;

trait TSingltone{
    private static $instance;
    
    public static function instance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
}