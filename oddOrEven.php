<?php
    $number = $_POST["number"] ; 
    $isEven = $number % 2 == 0 ;
    $flag = true ;
    if($isEven){
        $flag = "Is Even" ;
    } else {
        $flag = "Is Odd" ;
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Or Even</title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="number">
        <input type="submit">
    </form>
    <h1>
        <?php
            echo $flag ; 
        ?>
    </h1>
</body>
</html>