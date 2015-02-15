<?php
ob_start();

session_start();

$title = "Tarieven en beschikbaarheid";

include ('includes/info.php');
include ('templates/header.php');

?>
<body>
	<div class="container">
    	
<!-- BEGIN VAN HET MENU-->      
        <div id="menu">
<?php

include ('templates/menu.php');

?>  	
        </div>
<!-- EINDE VAN HET MENU -->      

<!-- BEGIN VAN DE BODY -->
		<div id="innerbox">
        	<div class="body">
            
            
<!-- BEGIN VAN HET THUMB IMAGE DEEL -->           
            	<div id="thumbimage">
<?php

include ('templates/thumb_image.php');

?> 
                </div>
            
            
<!-- EINDE VAN HET THUMB IMAGE DEEL --> 


<!-- BEGIN VAN HET TEXT DEEL -->
		<div id="textfield">
			<div class="body">
               <table>
               		<tr>
               			<td>
                        	1 dag weekend
                        </td>
                        <td>
                        	:
                        </td>
                        <td>
                        	&#8364; 75,--
                        </td>
               		</tr>
               		<tr>
               			<td>
                        	2 dagen weekend
                        </td>
                        <td>
                        	:
                        </td>
                        <td>
                        	&#8364; 75,--
                        </td>
                        <td>
                        	Aankomst zaterdag ochtend voor 10.00 uur en vertrek zondag avond voor 20.00 uur
                        </td>
               		</tr>
               		<tr>
               			<td>
                        	Midweek
                        </td>
                        <td>
                        	:
                        </td>
                        <td>
                        	&#8364; 75,--
                        </td>
               		</tr>
               </table>
<div id="contact">
<form>
<input type=button class="button" value="Klik hier voor de beschikbaarheid" onClick="javascript:popUp('beschikbaar.php')">
</form> (dit opent een pop-up scherm)
<br />
<noscript>
	<b>
	Sorry java script moet aan staan om de beschikbaarheid te zien.
    </b>
</noscript>
</div>
            </div>
        </div>

<!-- EINDE VAN HET TEXT DEEL -->          
            
            </div>
        </div>

<!-- EINDE VAN DE BODY -->
        
    </div>
    <div id="footer">
<?php

include ('templates/footer.php');

?> 
    </div>
</body>
</html>
<?php

ob_end_flush();

?>