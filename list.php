<?php include('config.php');?>
<?php 

	
    $sql = "SELECT * From `newsletter_css` "; 
     
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_array($req)) { 
	
	//remove below    

	echo '<li>'.$data['mail'].'</li>'; 
	}
?>

