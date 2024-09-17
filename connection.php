<!-- This is for the ful-filment of ALX final Project Submission  by Job Nayere-->
 
<?php

    $dsn = 'mysql:host=localhost; dbname=expenseman';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO($dsn, $user, $pass);
    }
    catch(PDOException $e){
        echo "Connection Error! ". $e->getMessage();
    }
?>

