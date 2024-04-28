

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?= "hello world" ?>
    </h1>
    <h1>
        <?php echo "hello world" ?>
    </h1>
    <p>My first paragrapgh</p>

    <?php
    $x = 10;
    $y =12;

    echo '<h2>' . $x . " , " . $y .  "="."$".$y.'</h2>';
    echo "<p> {$x} plus {$y} = $.{$x} </p>";

    ?>
</body>
</html>