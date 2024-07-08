<?php

class Product{
    public $id;
    public $image;
    public $title;
    public $category;
    public $price;
    public $description;

    function create($post_image,$post_title,$post_category,$post_price,$post_description){
       $db = mysqli_connect('localhost','root','root','bar');

       $query = "INSERT INTO `products`(`image`,`title`,`category`,`price`,`description`)
       VALUES ('$post_image','$post_title','$post_category',$post_price,'$post_description')";
  
  $responce = mysqli_query($db,$query);
  return $responce;
}

public static function read(){
  $db = mysqli_connect('localhost', 'root', 'root', 'bar');
  
  if(!$db){
  return false;
  }
  else{
  $query = "SELECT * FROM `products`";
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

public static function getProductById($product_id) {
  $db = mysqli_connect('localhost', 'root', 'root', 'bar');

  $query = "SELECT * FROM products WHERE id = $product_id";
  $result = mysqli_query($db, $query);

  if($result && mysqli_num_rows($result) > 0) {
      return mysqli_fetch_assoc($result);
  } else {
      return null;
  }
}

}

?>