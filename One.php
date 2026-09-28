<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question one</title>
</head>
<body>
    <?php

   
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// Initialize variables
$total = 0;
$evenTotal = 0;
$oddTotal = 0;

$min = $numbers[0];
$max = $numbers[0];

$minPositions = array();
$maxPositions = array();

         //  Print all elements
echo "All elements: <br>";

foreach ($numbers as $value) {
    echo $value . " ";
}

echo "<br><br>";

//  Calculate totals and find min/max
foreach ($numbers as $index => $value) {

    //   Calculate total of all elements
    $total = $total + $value;

         // Calculate total of even elements
    if ($value % 2 == 0) {
        $evenTotal = $evenTotal + $value;
    } else {
// Calculate total of odd elements
        $oddTotal = $oddTotal + $value;
    }
 
        // Find minimum and its positions
    if ($value < $min) {
        $min = $value;
        $minPositions = array($index + 1);
    } elseif ($value == $min) {
        $minPositions[] = $index + 1;
    }

 // Find maximum and its positions
    if ($value > $max) {
        $max = $value;
        $maxPositions = array($index + 1);
    } elseif ($value == $max) {
        $maxPositions[] = $index + 1;
    }
}

// Print results
echo "Total of all elements: " . $total . "<br>";
echo "Total of even elements: " . $evenTotal . "<br>";
echo "Total of odd elements: " . $oddTotal . "<br>";

echo "Minimum element: " . $min . "<br>";
echo "Minimum positions: " . implode(", ", $minPositions) . "<br>";

echo "Maximum element: " . $max . "<br>";
echo "Maximum positions: " . implode(", ", $maxPositions) . "<br>";

?>
</body>
</html>