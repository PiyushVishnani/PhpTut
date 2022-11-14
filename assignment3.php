<?php


//1. a)transform a string all uppercase letters

$string="piyush vishnani";
$string1="PIYUSH VISHNANI";
echo(strtoupper($string));
echo "<br>";

//b)transform a string all lowercase letters

echo(strtolower($string1));
echo "<br>";

//c)make a string's first character uppercase

echo ucfirst($string);
echo "<br>";

//d)make a string's first character of all words uppercase

echo ucwords($string);
echo "<br>";

/*2. write aphp script tp split the following string.
Sample string : '082307'
Expected Output : 08:23:07*/

echo chunk_split("082307",2,':');
echo "<br>";

/*3. Write a PHP script to check whether a string contains a specific string? 
Sample string : 'The quick black fox jumps over the white dog.'
Check whether the said string contains the string 'over'.*/

if(strpos("he quick black fox jumps over the white dog.","over") == true){
    echo "Sub string is there!!";
};
echo "<br>";

/*4. Write a PHP script to convert the value of a PHP variable to string. */

$var=25;
$str=(string)$var;

/*5. Write a PHP script to get the last three characters of a string.
Sample String : 'ak@creation.com'
Expected Output : 'com'*/

echo substr($string,-3);
echo "<br>";

/*6. Write a PHP script to format values in currency style. Sample values : value1 = 65.45, value2 = 104.35
Expected Result : 169.80*/

$value1 = 65.45;
$value2 = 104.35;
$result = $value1 + $value2;
echo number_format($result,"2");
echo "<br";

/*7. Write a PHP script to generate simple random password [do not use rand() 
function] from a given string. Sample string 
: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxy
z'
Note : Password length may be 6, 7, 8 etc.*/

function password_generate($length){
    $given="1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxy";
    print_r(substr(str_shuffle($given),0,$length));
}
password_generate(8);
echo "<br";

/*8. Write a PHP script to replace the first 'the' of the following string with 'That'. 
Sample date : 'the moon is round in shape */

echo str_replace("the","that","the moon is round in shape");

/*9. Write a PHP script to find the first character that is different between two 
strings. 
String1 : 'facebook'
String2 : 'faceboll'
Expected Result : First difference between two strings at position 6: "o" vs "l" */ 

$String1 = "facebook";
$String2 = "faceboll";
$pos= strcmp($String1,$String2);
echo "First difference between two strings at position";
 echo substr($string1,$pos,1) ;
 echo "vs";
 echo substr($String2,$pos,1);

 /*10. Write a PHP script to put a string in an array.
Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp
above the world so high,\nLike a diamond in the sky.";
Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle,
little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up
above the world so high," [3]=> string(26) "Like a diamond in the sky." }*/

$paragraph="Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp
above the world so high,\nLike a diamond in the sky.";
$array=explode("<br>",$paragraph);
var_dump($array);
?>