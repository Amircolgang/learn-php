<?php
    // echo "ho" ;

//     $number = 100000 ;
//     printf("this Number : %x",$number ) ;
//     echo '</br>' ;
//     echo '</br>' ;
//     printf("this Number : %b",$number ) ;
//     echo '</br>' ;
//     echo '</br>' ;
//     printf("this Number : %X",$number ) ;
//     echo '</br>' ;
//     echo '</br>' ;
//     printf("this Number : %f",$number ) ;
// 
    if($_POST["product"]){
        $result  = $_POST["count"] * $_POST["price"];
        // echo "<span>".$result."</span>" ; 
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span>
        <?php 
            echo $result
        ?>
    </span>
    s
</body>
</html>