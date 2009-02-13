<?php # (C) 2009 KrutiMedia Productions, Inc
      # Trimba CMS - Database Connection
      
require('config.php');

	$db = @mysqli_connect ($conf_db_host, $conf_db_user, $conf_db_pass, $conf_db_name)
		OR die ('Could not connect to the database: ' . mysqli_connect_error() );

?>