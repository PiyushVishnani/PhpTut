<?php
// $handle=fopen(filename,mode)  :  minimum 2 parameter required and max 4
// mode => 
// creating : x,x+
// writing : w,w+
// reading : r,r+
// append/edit : a,a+
// fwrite($handle,"hello")
// fread($handle,"hel) => this will return error because only write permission is given
// $handle=fopen('hello.txt','w');
$file=fopen('sectionj.txt','w');
fwrite($file,"hello piyush"); //returns number of characters writen in it
fwrite($file,"\nhello class");
fclose($file);
$file1=fopen('sectionj.txt','r');
// echo fgetc($file1); // to read file character by character
// echo fgetc($file1); // this will return second character
// while(!feof($file1)){
//     $var = fgetc($file1);
//     if($var=="\n"){
//         $var="<br>";
//     }
//     echo $var;
// }
// echo fgets($file1);
// echo fgets($file1);
//or
// while(!feof($file1)){
    // echo fgets($file1). "<br>";
// }
$varr = fread($file1,filesize("sectionj.txt"));
str_replace("\n","<br>",$varr);
echo $varr;
// unlink("sectionj.txt"); //to delete the file
copy('sectionj.txt','sectionj1.txt');
file_exists('sectionj1.txt');
rename('sectionj.txt','sectionh.txt');
// define the role of php_self.
// $_SERVER $_REQUEST $_FILES
?>