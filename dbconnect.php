<?php

	//  avoid mysql_connect() deprecation error.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	
	
	define('DBHOST', 'sql9.freemysqlhosting.net');
	define('DBUSER', 'sql9223380');
	define('DBPASS', '3h85IYkaSE');
	define('DBNAME', 'sql9223380');
	
	$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
	$dbcon = mysql_select_db(DBNAME);
	
	if ( !$conn ) {
		die("Connection failed : " . mysql_error());
	}
	
	if ( !$dbcon ) {
		die("Database Connection failed : " . mysql_error());
	}
