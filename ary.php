
<html>
<head>
<title> Array </title>
<style>
        pre{
        display: block;
        font-family: arial;
        white-space: pre;
        margin: 1em 0;
    }
    </style>
</head>
<body>
<pre>
<?php
// Declare an associative array

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";


// Encode the array into JSON format
$jsonData = json_encode($cars);

// Display the JSON output

echo $jsonData;

?>
</pre>
</body>
</html>