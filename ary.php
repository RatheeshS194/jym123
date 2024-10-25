
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

$data = array("name" => "John", "age" => 30, "city" => "New York");


// Encode the array into JSON format
$jsonData = json_encode($data);

// Display the JSON output

echo $jsonData;

?>
</pre>
</body>
</html>