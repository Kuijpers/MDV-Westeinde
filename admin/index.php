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
					<form action="" method="post" enctype="multipart/form-data" name="inloggen">
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
					<form enctype="multipart/form-data" action="upload.php" method="post">
						<table>
							<tr>
    							<th colspan="2">
        							<h4>
        								Hier kunnen de aangegeven bestanden toegevoegd worden.
            						</h4>
        						</th>
    						</tr>
							<tr>
    							<td>
        							Kiest u het bestand: 
        						</td>
                                  <td>
        							<input name="uploaded" type="file" />
        						</td>
    						</tr>
    						<tr>
    							<td>
        							<input class="button" name="reset" type="reset" value="Herstel" />
        						</td>
        						<td>
        							<input class="button" type="submit" value="Upload" />
        						</td>
    						</tr>
                            <tr>
                            	<td>
                                	<a href="logout.php">Uitloggen</a>
                                </td>
                            </tr>
						</table>
					</form>

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