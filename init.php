<!-- This is for the ful-filment of ALX final Project Submission  by Job Nayere-->
 
<?php 
    session_start();
    include_once 'connection.php';
    include_once 'base.php';
    include_once 'user.php';
    include_once 'expense.php';
    include_once 'budget.php';

    global $pdo;

    $getFromU = new User($pdo);
    $getFromB = new Budget($pdo);
    $getFromE = new Expense($pdo);

     define("BASE_URL", "http://localhost/ExpenseManagement-PHP/");
?>  