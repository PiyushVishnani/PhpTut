<?php
// setcookie(name,value,expire,path,domain,secure,https)
// name=cookie name
// value=content
// expire=expiry time in seconds, uses time function to access time of user visiting the website
// path=tells scope of cookies to be used on which websites
// domain=it is not necessary
// secure=true or false
// https=true or false
setcookie("hello",get_current_user(),time()+60);   // to create cookie
echo $_COOKIE['hello'];   //to print cookie
setcookie("hello","",time()-520);   //to delete cookie
?>