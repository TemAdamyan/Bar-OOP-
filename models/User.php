<?php

class User{
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $address;
    public $phone;
    public $password;
    public $gender;
    public $birtdate;


    function create($post_firstname,$post_lastname,$post_email,$post_address,$post_phone,$post_password,$post_gender,$post_birthdate){
       $db = mysqli_connect('localhost','root','root','bar');

       $query = "INSERT INTO `users`(`firstname`,`lastname`,`email`,`address`,`phone`,`password`,`gender`,`birthdate`) 
       VALUES ('$post_firstname','$post_lastname','$post_email','$post_address','$post_phone','$post_password','$post_gender','$post_birthdate')";
  
  $responce = mysqli_query($db,$query);
  return $responce;
}

public static function read(){
  $db = mysqli_connect('localhost', 'root', 'root', 'bar');
  
  if(!$db){
  return false;
  }
  else{
  $query = "SELECT * FROM `users`";
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


    public static function getUserByUsername($username) {
        $db = mysqli_connect('localhost', 'root', 'root', 'bar');
        $username = mysqli_real_escape_string($db, $username);
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);

        if($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }

    public static function readByEmail($email){
      $db = mysqli_connect('localhost', 'root', 'root', 'bar');
     
      if(!$db){
          return false;
      } else {
          $query = "SELECT * FROM `users` WHERE `email` = '$email'";
         
          $response = mysqli_query($db, $query);
         
          if(!$response){
              return false;
          } else {
              $user = mysqli_fetch_assoc($response);
              return $user;
          }
      }
  }

}

?>