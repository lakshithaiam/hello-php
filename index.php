<?php
echo "<h1>Hello World from PHP!</h1>";

echo "<p>Server Hostname: " . gethostname() . "</p>";

$serverIp = $_SERVER['SERVER_ADDR'] ?? "Not Available";
echo "<p>Server IP: " . $serverIp . "</p>";

$clientIp = $_SERVER['REMOTE_ADDR'] ?? "Not Available";
echo "<p>Client IP: " . $clientIp . "</p>";

// Visitor counter
$file = "counter.txt";
if (!file_exists($file)) {
    file_put_contents($file, "0");
}
$count = (int) file_get_contents($file);
$count++;
file_put_contents($file, $count);
echo "<p>You are visitor number: $count</p>";
?>
