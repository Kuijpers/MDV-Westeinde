<?php
ob_start();

session_start();

$title = "Dier en omgeving";

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
                <h3>
Deze pagina is bedoeld voor dier en omgeving.

                </h3>
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