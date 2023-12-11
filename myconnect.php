<?php

/* 
Copyright Notice                 
Web Site URL:  http://www.zeeways.com                   
Script Owner eMail: mail@zeeways.com    
Date: April, 2007        
Script Name: Zeeways Auction Website PHP Script  
Copyright Details: This script is not free.  Do not Remove this Copy Right notice.  
*/

// YOU NEED TO CHANGE THE CONTENTS OF THE values of variables given in single quotes

//CONFIGURATION SECTION STARTS ///

$servername='localhost' ;  // Replace this 'localhost' with your server name 
$database_username='db_username'; // Replace this  with your username 
$database_password='db_pass';  // Replace this  with your password
$database_name='db_name';//'bidmonster';  // Replace this 'db' with your database name

// CONFIGURATION SECTION ENDS ////



mysql_connect($servername,$database_username,$database_password);
mysql_select_db($database_name);

?>