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
if ($_POST["name"]) {
    $price = 0;
    switch ($_POST["name"]) {
        case 'c#':
            $price = 20;
            break;
        case 'js':
            $price = 90;
            break;

        case 'react':
            $price = 1200;
            break;

        default:
            echo "Not Valid";
            break;
    }
    $result  = $_POST["count"] * $price;
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
    <h5>Shoma Dar In Doreye
        <span>
            Name : <<
                <?php
                echo ucwords($name) ;
                ?>
                </span>
                >>
                Sabte Nam Kardid
    </h5>
    <br>
    <span>
        Mablagh Shoma :
        <?php
        echo $result;
        ?>
    </span>
    <br>
    <button>
        Back
        <a href="store.php">
            Click
        </a>
    </button>
</body>

</html>