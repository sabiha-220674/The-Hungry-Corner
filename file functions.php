<?php

// ---------- 1. fopen() + fwrite() ----------
echo "<h3>1. Writing using fopen() & fwrite()</h3>";
$file = fopen("sample.txt", "w");
fwrite($file, "Hello Students!\nThis file is created using fwrite().");
fclose($file);
echo "Data written successfully.<br>";

// ---------- 2. fopen() + fread() ----------
echo "<h3>2. Reading using fopen() & fread()</h3>";
$file = fopen("sample.txt", "r");
$content = fread($file, filesize("sample.txt"));
fclose($file);
echo nl2br($content) . "<br>";

// ---------- 3. file_get_contents() ----------
echo "<h3>3. Reading using file_get_contents()</h3>";
$content2 = file_get_contents("sample.txt");
echo nl2br($content2) . "<br>";

// ---------- 4. file_put_contents() ----------
echo "<h3>4. Writing using file_put_contents()</h3>";
file_put_contents("sample.txt", "\nThis line is added using file_put_contents().", FILE_APPEND);
echo "Data appended successfully.<br>";

// ---------- 5. file() ----------
echo "<h3>5. Reading using file()</h3>";
$lines = file("sample.txt");
foreach ($lines as $line) {
    echo nl2br($line);
}

// ---------- 6. fopen() + fread() + fwrite() ----------
echo "<h3>6. Read & Write using fopen(), fread(), fwrite()</h3>";
$file2 = fopen("demo.txt", "w+");
fwrite($file2, "PHP File Handling Combined Example");
rewind($file2);
echo fread($file2, filesize("demo.txt"));
fclose($file2);

?>