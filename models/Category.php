<?php

class Category{
    public $name;

    function create($post_name){
        $db = mysqli_connect('localhost','root','root','bar');
 
        $query = "INSERT INTO `categories`(`category_name`)
        VALUES ('$post_name')";
   
   $responce = mysqli_query($db,$query);
   return $responce;
 }

 public static function read(){
  $db = mysqli_connect('localhost', 'root', 'root', 'bar');
  
  if(!$db){
  return false;
  }
  else{
  $query = "SELECT * FROM `categories`";
  $response = mysqli_query($db, $query);
  
  if(!$response){
  return false;
  }
  else
  {
  $r = mysqli_fetch_all($response,MYSQLI_ASSOC);
  return $r;
  }
  }
  }

}

?>