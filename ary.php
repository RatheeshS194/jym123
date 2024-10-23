
<html>
<head>
<title> Array </title>
</head>
<body>
<?php
// Declare an associative array
$data = array("name" => "John", "age" => 30, "city" => "New York");

// Encode the array into JSON format
$jsonData = json_encode($data);

// Display the JSON output
echo $jsonData;
?>
</body>
</html>