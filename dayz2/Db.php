<?php

class Db{
       
       private static $_instance=null;
       private function __construct(){

       }
       private function __clone(){

       }
       public static function getInstance(){
       	
       	if(!self::$_instance instanceof Db){
       		return self::$_instance =new Db();

       	}
       	return self::$_instance;
       }

}
?>