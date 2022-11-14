<?php
$Md5_string=$_POST['Md5_string'];
$Number_format=$_POST['Number_format'];
$Ord_text=$_POST['Ord_text'];
$Rtrim_string=$_POST['Rtrim_string'];
$Str_replace_string=$_POST['Str_replace_string'];
$remove_string=$_POST['remove_string'];
$add_string=$_POST['add_string'];
$Str_len_string=$_POST['Str_len_string'];
$Strcasecmp_first_string=$_POST['Strcasecmp_first_string'];
$Strcasecmp_second_string=$_POST['Strcasecmp_second_string'];
$Strpos_string=$_POST['Strpos_string'];
$Strpos_substring=$_POST['Strpos_substring'];
$Substr_string=$_POST['Substr_string'];
$starting_index=$_POST['starting_index'];
$length=$_POST['length'];
$Strtolower_string=$_POST['Strtolower_string'];
$Bin2Hex_string=$_POST['Bin2Hex_string'];
$Chop_string=$_POST['Chop_string'];
$Chop_remove_string=$_POST['Chop_remove_string'];
if(isset($_POST['Md5'])){
    echo md5($Md5_string);
}
if(isset($_POST['Number_format'])){
    print_r(number_format($Number_format));
}
if(isset($_POST['Ord'])){
    echo ord($Ord_text);
}
if(isset($_POST['Rtrim'])){
    echo rtrim($Rtrim_string);
}
if(isset($_POST['Str_replace'])){
    echo str_replace($remove_string,$add_string,$Str_replace_string);
}
if(isset($_POST['Str_len'])){
    echo strlen($Str_len_string);
}
if(isset($_POST['Strcasecmp'])){
    echo strcasecmp($Strcasecmp_first_string,$Strcasecmp_second_string);
}
if(isset($_POST['Strpos'])){
    echo strpos($Strpos_string,$Strpos_substring);
}
if(isset($_POST['Substr'])){
    echo substr($Substr_string,"$starting_index",$length);
}
if(isset($_POST['Strtolower'])){
    echo strtolower($Strtolower_string);
}
if(isset($_POST['Bin2Hex'])){
    echo bin2hex($Bin2Hex_string);
}
if(isset($_POST['Chop'])){
    echo chop($Chop_string,$Chop_remove_string);
}

?>