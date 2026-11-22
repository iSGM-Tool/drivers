
<?php

echo "<h3>Available PHP Drivers</h3>";

$drivers = PDO::getAvailableDrivers();

if (empty($drivers)) {
    echo "No PDO drivers installed.";
} else {
    foreach ($drivers as $driver) {
        echo htmlspecialchars($driver) . "<br>";
    }
}

?>
