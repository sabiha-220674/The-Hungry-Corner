<?php
echo "<h2>PHP File & Folder Management </h2>";

// ---------- FILE & FOLDER SETUP ----------
$dir = "myFolder";
$file1 = "file1.txt";
$file2 = "file2.txt";

// Create a sample file
file_put_contents($file1, "This is a sample file");

// ---------- 1. mkdir() ----------
echo "<h3>1. mkdir()</h3>";
if (!is_dir($dir)) {
    mkdir($dir);
    echo "Directory created<br>";
} else {
    echo "Directory already exists<br>";
}

// ---------- 2. copy() ----------
echo "<h3>2. copy()</h3>";
copy($file1, "$dir/$file1");
echo "File copied to directory<br>";

// ---------- 3. rename() ----------
echo "<h3>3. rename()</h3>";
rename("$dir/$file1", "$dir/$file2");
echo "File renamed<br>";

// ---------- 4. is_file() ----------
echo "<h3>4. is_file()</h3>";
echo is_file("$dir/$file2") ? "It is a file<br>" : "Not a file<br>";

// ---------- 5. is_dir() ----------
echo "<h3>5. is_dir()</h3>";
echo is_dir($dir) ? "It is a directory<br>" : "Not a directory<br>";


// ---------- 6. unlink() ----------
echo "<h3>6. unlink()</h3>";
unlink("$dir/$file2");
echo "File deleted<br>";

// ---------- 7. rmdir() ----------
echo "<h3>7. rmdir()</h3>";
rmdir($dir);
echo "Directory removed<br>";
?>