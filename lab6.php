<?php

echo "<h2>PHP Variables, Scope & String Functions</h2>";

/* -----------------------------
PART A : VARIABLES & DATATYPES
----------------------------- */

echo "<h3>PHP Datatypes</h3>";

$stringVar = "PHP Programming";
$intVar = 100;
$floatVar = 10.75;
$boolVar = true;
$arrayVar = array("Apple","Banana","Mango");

echo "String: $stringVar <br>";
echo "Integer: $intVar <br>";
echo "Float: $floatVar <br>";
echo "Boolean: $boolVar <br>";

echo "Array Elements:<br>";
foreach($arrayVar as $value){
    echo $value."<br>";
}


/* -----------------------------
LOCAL VARIABLE SCOPE
----------------------------- */

function localScope(){
    $localVar = "This is Local Variable";
    echo "<br>Local Scope: ".$localVar;
}

localScope();


/* -----------------------------
GLOBAL VARIABLE SCOPE
----------------------------- */

$globalVar = "This is Global Variable";

function globalScope(){
    global $globalVar;
    echo "<br>Global Scope: ".$globalVar;
}

globalScope();


/* -----------------------------
STATIC VARIABLE SCOPE
----------------------------- */

function staticScope(){
    static $count = 0;
    $count++;
    echo "<br>Static Count: ".$count;
}

echo "<h3>Static Variable Example</h3>";

staticScope();
staticScope();
staticScope();


/* -----------------------------
PART B : STRING FUNCTIONS
----------------------------- */

echo "<h3>String Functions</h3>";

$str = "  Welcome To PHP Programming  ";

echo "Original String: ".$str."<br>";

/* Basic functions */

echo "Length: ".strlen($str)."<br>";
echo "Word Count: ".str_word_count($str)."<br>";
echo "Reverse: ".strrev($str)."<br>";

/* Case Conversion */

echo "Uppercase: ".strtoupper($str)."<br>";
echo "Lowercase: ".strtolower($str)."<br>";
echo "Ucfirst: ".ucfirst($str)."<br>";
echo "Ucwords: ".ucwords($str)."<br>";

/* Search & Replace */

echo "Position of PHP: ".strpos($str,"PHP")."<br>";
echo "Replace PHP with Web: ".str_replace("PHP","Web",$str)."<br>";

/* Substring & Trim */

echo "Substring: ".substr($str,0,10)."<br>";
echo "Trim: ".trim($str)."<br>";
echo "Left Trim: ".ltrim($str)."<br>";
echo "Right Trim: ".rtrim($str)."<br>";

/* String Comparison */

$str1 = "hello";
$str2 = "HELLO";

echo "strcmp result: ".strcmp($str1,$str2)."<br>";
echo "strcasecmp result: ".strcasecmp($str1,$str2)."<br>";

/* Special Characters */

$html = "<script>alert('test')</script>";
echo "HTML Safe: ".htmlspecialchars($html)."<br>";

$text = "John's Book";
echo "Addslashes: ".addslashes($text)."<br>";


/* -----------------------------
VALIDATION USING DIE()
----------------------------- */

$username = "ab";

if(strlen($username) < 3){
    die("<br>Username must be at least 3 characters long");
}

print "<br>Username accepted.";

?>