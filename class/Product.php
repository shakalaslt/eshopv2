<?php
include_once('Database.php');

class Product {

	public static function get_all(){
		 $db = new Database();
         $products = $db->select_array("SELECT * FROM products"); 

	}

	public static function get($id){
		 $db = new Database();
        return $db->select_array("SELECT * FROM products WHERE id = ". $id); 
	}
}



