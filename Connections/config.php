<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_config = "192.168.1.100:8889";
$database_config = "contentifier";
$username_config = "jotform";
$password_config = "xp98jk";
$config = mysql_pconnect($hostname_config, $username_config, $password_config) or trigger_error(mysql_error(),E_USER_ERROR); 
?>