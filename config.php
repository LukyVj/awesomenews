<?php
/* conf.php File : Connection to the database
---------------------------------------*/

	$dbh = mysql_connect ("mysql51-32.pro", "webgatemain", "xXhJU5OL") or die ('Impossible de se connecter à la base de donnès : '); 
	mysql_select_db ("webgatemain");
	$mail="contact@web-gate.fr";
?>