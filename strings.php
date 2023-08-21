<?php

//reverse string
echo "Reverse String : <br/>";

$strrev = "BALAJI N";

echo strrev($strrev);

echo "<br/><br/>";


//string length with tag also
echo "String Length : <br/>";
$strlen = "BALAJI N <br/>";

echo strlen($strlen);

echo "<br/><br/>";

//string position finder
echo "String Position Find : <br/>";
echo strpos("balaji.n@sparkouttech.com","@");

echo "<br/><br/>";

echo "String position finder with condition Find : <br/>";

$strpos = ("balaji.n@sparkouttech.com");

if(strpos($strpos,"@"))
{
  echo "Valid E-Mail";
}
else
{
  echo "Invalid E-Mail";
}

echo "<br/><br/>";

//string word count with tag also
echo "Word Count on String : <br/>";
$strwords = "Sparkout Tech Solutions <br/>";

echo str_word_count($strwords);

echo "<br/><br/>";

//Uppercase the First ccharacter of a word, it return with a html tag count
echo "Upper Case the Given String Contents first Character : <br/>";
$ucwords = "balaji n <br/><br/>";

echo ucwords($ucwords);

//lower case
echo "Lower case the first given string values first character : <br/>";
$lcfirst = "BALAJI N <br/>";

echo lcfirst($lcfirst);

echo "<br/>"; 

//upper case first character on the string
echo "Upper Case the first character on the string : <br/>";
$ucfirst = "balaji n";

echo ucfirst($ucfirst);

echo "<br/><br/>";

//toupper
echo "string to upper : <br/>";
$toupper = "balaji";

echo strtoupper($toupper);

echo "<br/><br/>";

//tolower
echo "to lower : <br/>";
$tolower = "BALAJI N";

echo strtolower($tolower);

echo "<br/><br/>";

//addcslashes
echo "addcshales : ";
$addcslashes = "1236459";

echo addcslashes($addcslashes,'1..5');

echo "<br/><br/>";

//addslashes
echo "addslashes : <br/>";
$addslashes = "Hi, Am 'BALAJI N'";

echo addslashes($addslashes);

echo "<br/><br/>";

//binary to hexadecimal
echo "Binary to Hexadecimal : <br/>";
$bin2hex = ("BALAJI N");

echo bin2hex($bin2hex);

echo "<br/><br/>";

//chop string
echo "Chop : ";
$stringchop = "BALAJI N";

echo $stringchop;

echo "<br/>";

echo chop($stringchop,'N');

echo "<br/><br/>";

//chunk_split
echo "Chunk split : <br/>";
$chunk_split = "BALAJI N"; //at the final character must have the split char

echo "BALAJI N : ".chunk_split($chunk_split,3,'@');

echo "<br/><br/>";

//string replace

echo str_replace("Hello","MR.","Hello Balaji N"); //replace at Hello
?>