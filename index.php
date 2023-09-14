<?php

function drawLine($number) {
    return str_repeat('*', $number);
}

function drawStripedLine($number) {
    $output = '';
    for ($i = 0; $i < $number; $i++) {
        $output .= ($i % 2 == 0) ? '*' : '_';
    }
    return $output;
}

function drawSquare($size) {
    $line = str_repeat('*', $size) . PHP_EOL;
    return str_repeat($line, $size);
}

function drawParallelogram($number) {
    $output = '';
    for ($i = 0; $i < $number; $i++) {
        $output .= str_repeat('_', $number - $i - 1);
        $output .= str_repeat('*', $number);
        $output .= str_repeat('_', $i);
        $output .= PHP_EOL;
    }
    return $output;
}

function drawTriangle($number) {
    $output = '';
    for ($i = 0; $i < $number; $i++) {
        $output .= str_repeat('*', $number - $i);
        $output .= str_repeat('_', $i);
        $output .= PHP_EOL;
    }
    return $output;
}

function drawRTriangle($number) {
    $output = '';
    for ($i = 0; $i < $number; $i++) {
        $output .= str_repeat('*', $i + 1);
        $output .= str_repeat('_', $number - $i - 1);
        $output .= PHP_EOL;
    }
    return $output;
}

$line = $stripedLine = $square = $parallelogram = $triangle = $rtriangle = '';

if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    $line = drawLine($number);
    $stripedLine = drawStripedLine($number);
    $square = drawSquare($number);
    $parallelogram = drawParallelogram($number);
    $triangle = drawTriangle($number);
    $rtriangle = drawRTriangle($number);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Biene Bryle T. Sanico</title>
</head>
<body>
    <h1>Mobile Dev LAB</h1>
    
    <form action="" method="post">
        <input type="number" name="number" placeholder="Enter a number" required>
        <input type="submit" value="Submit">
    </form>
    
    <p>The line is: <br><?php echo nl2br($line); ?></p>
    <br/>
    <p>The striped line is: <br><?php echo nl2br($stripedLine); ?></p>
    <br/>
    <p>The square is: <br><?php echo nl2br($square); ?></p>
    <br/>
    <p>The Parallelogram is: <br><?php echo nl2br($parallelogram); ?></p>
    <br/>
    <p>The triangle is: <br><?php echo nl2br($triangle); ?></p>
    <br/>
    <p>The reverse triangle is: <br><?php echo nl2br($rtriangle); ?></p>
</body>
</html>
