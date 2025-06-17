<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#">
        <div>
            <?php
            $numberOfTask = $_POST["task"];
            for ($i = 0; $i <= $numberOfTask; $i++) {
                echo "<span>" . "Enter Your => " . $i . "</span>";
                echo '<input type="text">';
                echo '<input type="checkbox" id="item">';
                echo "<br>";
            };
            ?>
        </div>
    </form>
    <script>
        let items = document.querySelectorAll("#item")
        if()
    </script>
</body>

</html>