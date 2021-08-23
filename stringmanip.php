<?php 
$title = "String manip";
include 'includes/header.php' ?>
    <h1>PHP - String Manipulation</h1>
    <?php
    $manish ="manish is coming late today";
    $siddhant =" manish is a gud person";
    $name = "dalmik chand ";
    $money = 'I AM MAD';
    echo $manish . " everything  " . $siddhant;
    echo '<br/>';
    // echo $siddhant;

    echo '<hr/>';
    // string transformation
    echo "upercase first letter " .ucfirst($name) . '<br/>';
    echo "upercase the first letter of each word " .ucwords($name).'<br/>';
    echo "upercase the first letter of each word " .ucwords($manish).'<br/>';

    echo 'upercase : '. strtoupper($name).'<br/>';
    echo 'upercase : '. strtolower($money).'<br/>';
    echo '<hr/>';

    echo 'string repeat : ' . str_repeat($name .' ', 10) . '<br/>';
    echo 'string repeat - nested funtion: ' . strtoupper(str_repeat($name .' ', 10)) . '<br/>';
    echo 'getting a substring: ' . substr($name ,3 , 8) .'<br/>';

    echo 'get the position of string: ' . strpos($name, 'c') . '<br/>';

    // return null

    echo 'find character "R": ' .strchr($name, 'R'). '<br/>';
    echo 'find character "m": ' .strchr($name, 'm') . '<br/>';
    echo 'find character "k": ' .strchr($name, 'k') . '<br/>';

    echo 'find lenght of string: ' .strlen($name) . '<br/>';

    echo 'without trim: ' . "A" . " B C D " . "E" . '<br/>';
    echo 'with trim function : ' . "A" . trim(' B C D ') . "E" .'<br/>';
    echo 'left trim function : ' . "A" . ltrim(' B C D ') . "E" .'<br/>';
    echo 'right trim function : ' . "A" . rtrim(' B C D ') . "E" .'<br/>';

    echo 'replace string: ' . str_replace('coming', 'love',$manish). '<br/>';
    

    ?>
<?php require 'includes/footer.php' ?>