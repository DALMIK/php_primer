<?php 
$title = 'For loop';
include 'includes/header.php' 
?>
    <h1>for loops page</h1>

<?php
     
    //  for loops

    for($count=0; $count <10 ; $count++){
        echo '<h3>here is for loop</h3>';
    }
    
    for($count=0; $count <10 ; $count++){
        echo "<h3>here is count : $count</h3>";
    }
?>

<?php require 'includes/footer.php' ?>