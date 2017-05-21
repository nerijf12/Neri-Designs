<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conndirectory = "localhost";
$database_conndirectory = "00demo";
$username_conndirectory = "generic";
$password_conndirectory = "abc123";
$conndirectory = mysql_pconnect($hostname_conndirectory, $username_conndirectory, $password_conndirectory) or trigger_error(mysql_error(),E_USER_ERROR); 
?>