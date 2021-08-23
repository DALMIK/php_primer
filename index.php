<?php 
$title = "Index";
include 'includes/header.php' 
?>
<!-- basic html -->
<h1>Hello HTML -PHP primer</h1>
<?php
// printing to html using echo
echo 'hello php';
echo '<br/>';
echo 'second line';

 
    // declare variable
    echo '<br/>';
    $name = 'manish chand';
    $age = 20;
    // echo variable
    echo '$name';
    echo '<h1>my name is : '.$name.'</h1>';
    echo '<h1>my age is : '.$age.'</h1>';
    echo "<h1> my name is : $name and age is : $age </h1>";
?>

<button type="button" class="btn btn-outline-danger">CLICK ME</button>
<button type="button" class="btn btn-outline-success">CLICK ME HERE</button>
<button type="button" class="btn btn-primary">CLICK ME EVER</button>

<a class="btn btn-outline-success" target="_blank" href="https://www.heroku.com">Heroku.com</a>

<?php require 'includes/footer.php' ?>