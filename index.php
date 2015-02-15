<?php
ob_start();

session_start();

$title = "Welkom bij familiehuis Westeinde";

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
            	<h2>
                	Hartelijk welkom bij
                </h2>
                <h1>
                	Familiehuis Westeinde
                </h1>
                <h3>
We nodigen u van harte uit een kijkje op onze site<br />
te nemen en wij hopen dat een nadere kennismaking daarna niet uit kan blijven.
<br />
<br />
Familiehuis Westeinde is een luxe accommodatie waar u zich snel thuis voelt.<br />
Voor uw gezellige weekend of vakantie met familie of vrienden zijn wij het gehele jaar geopend.

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