<?php 
$title = 'Function';
include 'includes/header.php' 
?>
    <h1>functions</h1>

    <?php
    // defining a functions
    
    function writeMessage(){
        echo "you are a really a nice person ,  have a nice time! <br/> ";
    }

    // calling a function
    writeMessage();
    
    echo '<hr/>';
    writeMessage();

    // function with parameter
    function addfunction($num1,$num2){
    $sum = $num1 + $num2;
    echo "the sum of $num1 and $num2 is: $sum <br/>";
    }

    // pass by refrence - use ampersand in parameter
    function changenum(&$num3){
        $num3 = $num3 + 10;
        // $num3 += 10
    }

    function returnproduct($num1,$num2){
        $prod = $num1 * $num2;
        return $prod;
    }

    $num3 = 400;
    $num = 600;
    addfunction(10,20);
    addfunction(10, $num);
    addfunction('10', "40");

    changenum($num3);
    echo $num3 . '<br/>';

    $return_value = returnproduct(10,200);
    echo $return_value . '<br/>';
    
    ?>
<?php require 'includes/footer.php' ?>