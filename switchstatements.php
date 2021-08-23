    <?php 
    $title = "Switch statement";
    include 'includes/header.php' 
    ?>
    <h1>switchstatements.php</h1>
    <?php 
        $grade ='C';

        switch($grade){
            case 'A':
                echo '<h3 style="color:green">you have passed</h3';
                break;
            case 'B':
                echo '<h3 style="color:blue">you did well</h3';
                break;
            case 'C':
                echo '<h3 style="color:red">you have failed</h3';
                break;
            default:
            echo '<h2 style="color:yellow">you are disghusting</h2>';
            break;
        }
        echo '<br/>';
    ?>
<?php require 'includes/footer.php' ?>