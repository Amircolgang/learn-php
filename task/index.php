<?php
$numberOfTask = $_POST["task"] ; 
for($i = 0 ; $i <= $numberOfTask ; $i++){
    echo "<span>"."Enter Your => ".$i."</span>" ;
    echo '<input type="text">';
    echo "<br>" ;
};
