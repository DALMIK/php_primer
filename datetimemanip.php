<?php
$title = 'Date manipulation';
 include 'includes/header.php'
?>
    
<?php 

    $datenow = getdate();
    echo "today's date is : <br/>";
    echo $datenow['mday'].'<br/>';
    echo $datenow['mon'].'<br/>';
    echo $datenow['year'].'<br/>';

    echo "today's date : " . $datenow['mon'] . '/' . $datenow['mday'] . '/' . $datenow['year'];

    echo '<br/>' . time();

?>
<?php require 'includes/footer.php' ?>