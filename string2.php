<?php
echo "<h3>strpos() and substr()</h3>";
$Email = "president@whitehouse.gov";
$NameEnd = strpos($Email, "@");

if(strpos($Email, '@') !== true){
    echo "Contains @ sign <br>";
}else{
    echo "Doesn't contain <br>";
}

echo "<p>The name portion of the email address is " . substr($Email, 0, $NameEnd). "</p>";

# strchr(), strrchr()
echo "<h3>strchr() and strrchr()</h3>";

    // search for the first occurrence and return rest of string
echo strchr("Hello world!", "world"). "<br>";
echo strchr("My name is Kelvin", "name"). "<br>";

echo strrchr("hello@world@gmail.com", '@');

# str_replace(), str_ireplace()
        //case-sensitive    case-insensitive
echo "<h3>str_replace() and str_ireplace()</h3>";
$NewEmail = str_replace("president", "vice.president", $Email);
echo $NewEmail;

# strtok()
echo "<h3>strtok()</h3>";
$string =  "Hello, this is php string";
$delimiter = " ";

// $token = strtok($string, $delimiter);

// while($token !== false) {
//     echo $token. "<br>";
//     $token =  strtok($delimiter);
// }

# strtok()
echo "<h3>str_split() and explode()</h3>";

$string = "Hello";
$resultArr = str_split($string);
var_dump($resultArr);

