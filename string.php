<?php
$foo = 'hello world!';
echo ucfirst($foo). "<br>";
echo strlen($foo). "<br>";
echo str_word_count($foo). "<br>"; // word count
echo strpos($foo, "world"). "<br>"; // if found, return start index position of that word

# Slicing
                // start index, the number of characters to return 
echo substr($foo, 6, 5). "<br>";
echo substr($foo, 6). "<br>";
echo substr($foo, -5, 3). "<br>";

$x = 2;
echo is_int($x);

echo "<br>";

# Change String Case

# Encoding and Decoding
$text = "This is <b>bold</b> text";
echo $text. "<br>"; # output -> This is bold text
// encoding
echo htmlspecialchars($text) . "<br>"; # output -> This is <b>bold</b> text

$text1 = "<script>alert('This is php')</script>";
// echo $text1;
echo htmlspecialchars($text1);

echo "<br>";

# Trim
$var1 = "  hello php ";
echo trim($var1);
echo rtrim($var1);
echo ltrim($var1);

echo "<br><br>";

echo str_rot13("Hello World") . "<br>";
echo str_rot13("Uryyb Jbeyq") . "<br>";

?>