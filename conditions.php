

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$score = 90;
?>
    <?php if($score >90): ?>
    <strong>A</strong>
    <?php elseif ($score >70): ?>
    <strong>B</strong>
    <?php elseif ($score > 60): ?>
    <strong>C</strong>
    <?php else: ?>
    <strong>F</strong>
    <?php endif ?>
</body>
</html>