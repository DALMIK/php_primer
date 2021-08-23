<?php 
$title = 'Array';
include 'includes/header.php'
?>
<h1>arrays page</h1>
<?php 
    // a variable
    $num =10;

    //  a arrray
    $numbers = array(1,2,3,4,6,7,8);

    
    echo $numbers[4]; 
    $size = count($numbers);
    echo "<p>here is total count : $size </p>";

   for($count=0; $count<$size;$count++){
       echo "<p>$numbers[$count]</p>";
   }
?>

<?php require 'includes/footer.php' ?>