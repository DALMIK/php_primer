<?php 
$title = "If statements";
include 'includes/header.php' ?>
<body>
    <h1>if else statements</h1>
    <h3 style="color: red"></h3>
<?php
    // an if statements that will carry out an action based on the vale of the variable
    echo '<h2>if statements</h2>';

    $grade = 70;
    //  ===, ==, >, <, <=, >=,
    if($grade>=40){
        echo '<h3 style="color: green">you have passed the exam</h3>';
    }else{
            echo '<h3 style="color: red">you have failed </h3>';
    }

    $grade ='B';
    // if-else if-else
        if($grade == 'A'){
            echo '<h2>you are a superstar</h2>';
        }elseif($grade=='B'){
            echo '<h2>you did well</h2>';
        }else{
            echo '<h2>you have failed</h2>';
        }
?>
<?php require 'includes/footer.php' ?>