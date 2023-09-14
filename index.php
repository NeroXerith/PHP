<?php
function drawLine($number) {
    $output = "";
    for($i = 0; $i < $number; $i++){
        $output .="*";
    }
    return $output;
}
function drawStripedLine($number) {
    $output = "";
    for ($i = 0; $i < $number; $i++) {
      if ($i % 2 == 0) {
        $output .= "*";
      } else {
        $output .= "_";
      }
    }
    return $output;
}

function drawSquare($size) {
    $output = "";
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            $output .= "*";
        }
        $output .= "\n";
    }
    return $output;
}

function drawParallelogram($number)
{
    $output = "";
    for ($i = 0; $i < $number; $i++) {
        for ($j = 0; $j < $number - $i - 1; $j++) {
            $output .= "_";
        }
        for ($k = 0; $k < $number; $k++) {
            $output .= "*";
        }
        for($l = $i; $l > 0; $l--){
            $output .= "_";
        }
        $output .= "<br>";
    }
    return $output;
}

function drawTriangle($number)
{
    $output = "";
    for ($i = 0; $i < $number; $i++) {
        for ($j = 0; $j < $number - $i; $j++) {
            $output .= "*";
        }
        $output .= str_repeat("_", $i);
        $output .= "\n";
    }
    return $output;
}

function drawRTriangle($number)
{
    $output = "";
    for ($i = 0; $i < $number; $i++) {
        for ($j = 1; $j <= $i + 1; $j++) {
            $output .= "*";
        }
        $output .= str_repeat("_", $number - $i - 1);
        $output .= "\n";
    }
    return $output;
}
// Check if the "number" key exists in the $_POST array.
if (isset($_POST['number'])) {
  $number = $_POST['number'];
  $line = drawLine($number);
  $stripedLine = drawStripedLine($number);
  $square = drawSquare($number);
  $parallelogram = drawParallelogram($number);
  $triangle = drawTriangle($number);
  $rtriangle = drawRTriangle($number);
} else {
  // The "number" key does not exist.
  $line = "";
  $stripedLine = "";
  $square = "";
  $parallelogram = "";
  $triangle = "";
  $rtriangle = "";
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
