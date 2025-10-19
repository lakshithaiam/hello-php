<?php
echo "Hello World from PHP!";



echo "<h1>Hello World from PHP!</h1>";
echo "<p>Server Hostname: " . gethostname() . "</p>";
echo "<p>Server IP: " . $_SERVER['SERVER_ADDR'] . "</p>";
echo "<p>Client IP: " . $_SERVER['REMOTE_ADDR'] . "</p>";




$file = "counter.txt";

// Initialize counter if file not exists
if(!file_exists($file)){
    file_put_contents($file, "0");
}

// Read current count
$count = (int) file_get_contents($file);

// Increase count
$count++;

// Save new count
file_put_contents($file, $count);

echo "<h1>Hello World from PHP!</h1>";
echo "<p>You are visitor number: $count</p>";
?>
