<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
</head>
<body>
    <?php

 
$students = array(

    "CA221" => array(
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "064840403",
        "Address" => "Laba Dhagax, Wardhigley"
    ),

    "CA223" => array(
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "064722301",
        "Address" => "Taleex, Hodan"
    ),

    "CA221_2" => array(
        "Name" => "Amina Nurad",
        "Phone" => "064699276",
        "Address" => "Macmaanka, Dharkenley"
    )

);

//    Print the array in an HTML table
echo "<table border='1' cellpadding='10' cellspacing='0'>";

//      Table header
echo "<tr>";
echo "<th></th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

//Print table rows
foreach ($students as $class => $details) {

    echo "<tr>";

    echo "<th>" . $class . "</th>";

    echo "<td>" . $details["Name"] . "</td>";
    echo "<td>" . $details["Phone"] . "</td>";
    echo "<td>" . $details["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>