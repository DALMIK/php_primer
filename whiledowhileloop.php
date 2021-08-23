<?php 
$title = "While do While";
include 'includes/header.php' ?>
<h1>while loop page</h1>
    <?php

$grade = 0;

// infinite loop 
// while($grade<10){
//     echo '<p>here is while loop</p>';
//     $grade++;
// }

// pre conditional loop
$grade = 0;
while($grade<10){
    echo '<p>here is while loop</p>';
    $grade++;
}
    echo 'exit loop';
?>


<h1>do while loops page</h1>
<!-- post condition loop -->
<?php 
$grade =0;
    do{
        echo '<p>i am do while loop</p>';
        $grade++;
    }while($grade<10);

    echo 'exit loop';
?>

<?php require 'includes/footer.php' ?>