<?php
$connect = mysql_connect(“209.129.8.3”, “47924”, “47924cis12”); if (!connect) { die('Connection Failed: ' . mysql_error()); { mysql_select_db(“47924”, $connect);
$user_info = “INSERT INTO bh2477979_entity_Donations (firstname, lastname, amount, date) VALUES ('$_POST[Firstname]', '$_POST[Lastname]','$_POST[Donation Amount]','$_POST[Date]')”; if (!mysql_query($user_info, $connect)) { die('Error: ' . mysql_error()); }
echo “We have received your information! We will contact you within the next 24 hours!”;
mysql_close($connect); 
?>