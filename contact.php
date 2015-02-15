<?php
ob_start();

session_start();

$title = "Contact pagina";

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
            	<div id="contact">
<?php
include ('includes/contact_script.php');
?>
            		<fieldset>
                		<legend>
                    		Contact pagina
                    	</legend>
                        	<div>
                			<table>
                            	<tr>
                                	<th colspan="3">
                                     Vult u a.u.b. onderstaand formulier in.
                                     <br />
                                     Wij nemen dan zo spoedig mogelijk contact met u op.
                                    </th>
                                </tr>
                            	<tr>
                                	<th colspan="3">
                                    	<i>
                                        	Alle velden zijn verplicht.
                                        </i>
                                    </th>
                                </tr>
                              	<tr>
                              		<td>
                                    	Uw emailadres
                                    </td>
                                    <td>
                                    	:
                                    </td>
                                    <td>
                                    	<input name="1email" type="text" size="35" />
                                    </td>
                        		</tr>
                              	<tr>
                              		<td>
                                    	Onderwerp
                                    </td>
                                    <td>
                                    	:
                                    </td>
                                    <td>
                                    	<input name="1onderwerp" type="text" size="35" />
                                    </td>
                        		</tr>
                                <tr>
                                	<td valign="top">
                                    	Opmerking
                                    </td>
                                    <td valign="top">
                                    	:
                                    </td>
                                    <td>
                                    	<textarea name="1opmerking" cols="27" rows="10"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    	<input class="button" name="reset" type="reset" value="Herstel" />
                                    </td>
                                	<th colspan="2">
                                    	<input class="button" name="submit" type="submit" value="Verzenden" />
                                    </th>
                                </tr>
                        </table>
                        </div>
                        <div>
                        	<table>
                            	<tr>
                                	<th colspan="3">
                                    	U kunt ook direct contact opnemen.
                                    </th>
                                </tr>
                                <tr>
                                	<th colspan="3">
                                    	<h2>
                                    	Familiehuis Westeinde
                                        </h2>
                                    </th>
                            	</tr>
                                <tr>
                                	<td>
                                    	Adres
                                    </td>
                                    <td>
                                    	:
                                    </td>
                                    <td>
                                    	<?php echo $adres ; ?>
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    	Postcode
                                    </td>
                                    <td>
                                    	:
                                    </td>
                                    <td>
                                    	<?php echo $postcode ; ?>
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    	Plaats
                                    </td>
                                    <td>
                                    	:
                                    </td>
                                    <td>
                                    	<?php echo $plaats ; ?>
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    	Telefoonnummer
                                    </td>
                                    <td>
                                    	:
                                    </td>
                                    <td>
                                    	<?php echo $telnr ; ?>
                                    </td>
                                </tr>
                                <tr>
                                	<td>
                                    	Fax
                                    </td>
                                    <td>
                                    	:
                                    </td>
                                    <td>
                                    	<?php echo $fax ; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
               		</fieldset>
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