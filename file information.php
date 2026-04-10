<?php
echo "<h2>PHP File Information Functions</h2>";

$filename = "sample1.txt";

// Create file if it does not exist
if (!file_exists($filename)) {
    file_put_contents($filename, "This is a sample file for file information functions.");
}

// 1. file_exists()
echo "<b>1. file_exists(): </b>";
echo file_exists($filename) ? "File exists<br>" : "File does not exist<br>";

// 2. filesize()
echo "<b>2. filesize(): </b>";
echo filesize($filename) . " bytes<br>";

// 3. filetype()
echo "<b>3. filetype(): </b>";
echo filetype($filename) . "<br>";

// 4. fileatime() – Last access time
echo "<b>4. fileatime(): </b>";
echo date("d-m-Y H:i:s", fileatime($filename)) . "<br>";

// 5. filemtime() – Last modified time
echo "<b>5. filemtime(): </b>";
echo date("d-m-Y H:i:s", filemtime($filename)) . "<br>";

// 6. filectime() – Last status change time
echo "<b>6. filectime(): </b>";
echo date("d-m-Y H:i:s", filectime($filename)) . "<br>";

// 7. fileperms()
echo "<b>7. fileperms(): </b>";
echo substr(sprintf('%o', fileperms($filename)), -4) . "<br>";

// 8. fileowner()
echo "<b>8. fileowner(): </b>";
echo fileowner($filename) . "<br>";

// 9. filegroup()
echo "<b>9. filegroup(): </b>";
echo filegroup($filename) . "<br>";

// 10. fileinode()
echo "<b>10. fileinode(): </b>";
echo fileinode($filename) . "<br>";
?>