<?php

ob_start();

session_start();

include ('../includes/info.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Westeinde</title>
<link href="admin.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
<?php

	if (!isset($_SESSION['user']) || !isset($_SESSION['password']) || !isset($_SESSION['logged']))
		{
			if (!isset($_POST['submit']))
				{
?>
					<form action="index.php" method="post" enctype="multipart/form-data" name="inloggen">
						<table>
    						<tr>
        						<th colspan="2">
            						Meld u a.u.b. eerst aan.
            					</th>
        					</tr>
        					<tr>
        						<td>
            						Gebruikersnaam
            					</td>
            					<td>
            						:
            					</td>
            					<td>
            						<input name="user" type="text" size="30" />
            					</td>
        					</tr>
        					<tr>
        						<td>
            						Wachtwoord
            					</td>
            					<td>
            						:
            					</td>
            					<td>
            						<input name="password" type="password" size="30" />
            					</td>
        					</tr>
        					<tr>
        						<td>
            						<input class="button" name="submit" type="submit" value="Inloggen" />
            					</td>
        					</tr>
    					</table>
					</form>
<?php			}
			if (isset($_POST['submit']))
				{
					$user		=	$_POST['user'];
					$pass		=	$_POST['password'];
					
					if (empty($user) || empty($pass))
						{
							echo "<table><tr><td>";
							echo "Niet alle velden zijn ingevuld."; 
							echo "</td></tr>";
							echo "<tr><td><b>";
 							echo "Over 5 seconden gaat u terug.";
							echo "</b>";
							header("Refresh: 5; URL=\"index.php\"");
							echo "</td></tr></table>";
						
						}
					else
						{
								$pass	=	md5($pass);
							
							if ($user !== $gebruiker || $pass !== $wwoord)
								{
									echo "<table><tr><td>";
									echo "Gebruiker en wachtwoord komen niet overeen."; 
									echo "</td></tr>";
									echo "<tr><td><b>";
 									echo "Over 5 seconden gaat u terug.";
									echo "</b>";
									header("Refresh: 5; URL=\"index.php\"");
									echo "</td></tr></table>";	
								}
							else
								{
									
									$_SESSION['user'] 		=	$user;
									$_SESSION['password']	=	$pass;
									$_SESSION['logged']		=	"1";
									
									header("Refresh: 5; URL=\"index.php\"");
								}
						}
				}
			
		}
	
	if (isset($_SESSION['user']) || isset($_SESSION['password']) || isset($_SESSION['logged']))
		{
			if ($_SESSION['user'] !== $gebruiker || $_SESSION['password'] !== $wwoord || $_SESSION['logged'] !== "1")
				{
					session_destroy();
					header("Refresh: 0; URL=\"index.php\"");
				}
			else
				{
?>
					<table>
<?php 
 							$target = "../excel/"; 
 							$filename	=	basename( $_FILES['uploaded']['name']) ;
 							$target = $target . basename( $_FILES['uploaded']['name']) ; 
 							$ok=1;
 
 						if (!($filename =="beschikbaarheid.html")) 
 							{
								echo "<tr><td>";
 								echo "Het bestand wat u probeerd te uploaden is incorrect.";
								echo "</td></tr>";
 								$ok=0;
 							}
 
 					//Here we check that $ok was not set to 0 by an error 
 						if ($ok==0) 
 							{ 
								echo "<tr><td>";
 								echo "Sorry het bestand is niet toegevoegd."; 
								echo "</td></tr>";
								echo "<tr><td><b>";
 								echo "Over 5 seconden gaat u naar de andere pagina.";
								echo "</b></td></tr>";
								header("Refresh: 5; URL=\"index.php\"");
 							} 
 
 					//If everything is ok we try to upload it 
 						else 
 							{
 								if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
 									{
										echo "<tr><td>";
 										echo "Het bestand ". $filename. " is toegevoegd.";
										echo "</td></tr>";
										echo "<tr><td><b>";
 										echo "Over 5 seconden gaat u naar de andere pagina.";
										echo "</b></td></tr>";
										header("Refresh: 5; URL=\"index.php\"");
 									} 
 								else 
									{
										echo "<tr><td>";
 										echo "Sorry, er was een probleem met het toevoegen van het bestand.";
										echo "</td></tr>";
										echo "<tr><td><b>";
 										echo "Over 5 seconden gaat u naar de andere pagina.";
										echo "</b></td></tr>";
										header("Refresh: 5; URL=\"index.php\"");
 									}
 							}
 ?>
						</table>
<?php
				}
			
			
			
		}
?>









</div>



</body>
</html>
<?php

ob_end_flush();


?>