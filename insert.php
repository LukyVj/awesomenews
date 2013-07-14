<?php 
header('Location: thanks.php');
include('config.php');
//request
if (isset($_POST['submit']) && $_POST['mail'] != "") {
		
	if(isset($_POST['mail']))      $mail= $_POST['mail'];
	else      $mail="";
	
	
    $sql = "INSERT INTO `newsletter_css` (`id`, `mail`) VALUES (NULL,'$mail')"; 
     
    mysql_query($sql) or  die(mysql_error()); 


}
?>