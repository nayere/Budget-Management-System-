<!-- This is for the ful-filment of ALX final Project Submission  by Job Nayere-->
 
<?php
include "init.php";

if(isset($_POST['username'])){
   $username = $_POST['username'];

   $result = $getFromU->checkUsername($username);
   $response = "Available.";
   
      if($result){
          $response = "Not Available.";
      }
   echo $response;
   die;
}

?>