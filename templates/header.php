<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta http-equiv="content-language" content="nl-nl" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="resource-type" content="document" />
	<meta name="distribution" content="global" />
	<meta name="copyright" content="2011 Divigo Design" />
	<meta name="keywords" content="" />

<!-- 
DEZE VERWIJZING NAAR DE CSS STAAT ER ALLEEN VOOR HET UITWERKEN.
ER IS EEN KEUS UIT 2 CSS BESTANDEN. (960.CSS EN 1200.CSS)
BIJ AANPASSINGEN BEIDE BESTANDEN AANPASSEN EN CONTROLEREN
WANNEER ALLES KLOPT DAN MAG DEZE VERWIJDERD WORDEN.
-->
	<link rel="stylesheet" type="text/css" href='style/1200.css'/>
<!-- TOT HIER MAG HET VERWIJDERD WORDEN !!!!!!!!!!!!!!!!!!!!!! -->


<?php

// BIJ ONDERSTAAND PHP GEDEELT STAAN OP DIT MOMENT // VOORAAN IN DE LIJN
// WANNEER DE WEBSITE ONLINE GEZET WORD EN ALLES KLOPT DAN MOETEN DEZE VERWIJDERD WORDEN BIJ IEDERE LINE
// DIT STUKJE SCRIPT ZORGT ERVOOR DAT ER AANPASSINGEN ZIJN VOOR 2 TYPEN SCHERMRESOLUTIES

//	if (isset($_SESSION['width'])) // wanneer de session een waarde heeft
//		{
//			$width	=	$_SESSION['width'];
//	
//		if ($width < 1280 ) // Als de schermresolutie kleiner is als 1200
//			{
//				echo "<link rel='stylesheet' type='text/css' href='style/960.css'/>";	
//			}
//		else // Als de schermresolutie groter is als 1200
//			{
//				echo "<link rel='stylesheet' type='text/css' href='style/1200.css'/>";	
//			}
//		}
//	else // Als de session geen waarde heeft
//		{
//	 	if(isset($_GET['width']) && isset($_GET['height'])) // Kijk of er een GET waarde is wanneer deze er is
//	 		{
//				$_SESSION['width'] = $_GET['width']; // Zet de GET waarde om in een session waarde
//			
//				header("Refresh: 0; URL=\"${_SERVER['SCRIPT_NAME']}\""); // Als de session waarde is gemaakt refresh de pagina voor een schone URL
//			}
//		else // Wanneer er geen GET waarde is voer het volgende javascript uit
//			{
//			echo "<script type='text/javascript'>\n";
//			echo " location.href=\"${_SERVER['SCRIPT_NAME']}?${_SERVER['QUERY_STRING']}". "&width=\" + screen.width + \"&height=\" + screen.height;\n";
//			echo "</script>\n";
//			echo "<link rel='stylesheet' type='text/css' href='style/960.css'/>";
//			exit();
			
//			}
//	}


?>

<title> <?php echo $title ;?> </title>

<SCRIPT LANGUAGE="JavaScript">
<!-- Idea by:  Nic Wolfe -->
<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=850,height=400,left = 162,top = 134');");
}
// End -->
</script>

</head>
