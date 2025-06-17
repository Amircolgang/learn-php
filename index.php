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
    if($_POST["name"]){
        $price = 0
        switch ($_POST["name"]) {
            case 'c#':

                break;
            
            default:
                echo "Not Valid" ;
                break;
        }
        $result  = $_POST["count"] * $_POST["price"];
        $name = $_POST["name"];
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
        Mablagh Shoma : 
    <?php 
            echo $result;
        ?>
    </span>
    <span>
        Name : 
    <?php 
            echo $name;
        ?>
    </span>
    
</body>
</html>