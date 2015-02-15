// Website voor Familiehuis Westeinde in opdracht van MDV Design.

Onderstaande punten zijn punten van aandacht.

#	thumb_image toevoegen
	
	*	Maak thumbs van 200 x 200 px
	*	Plaats de thumbs in de map images met als bestands naam een getal
	*	Open het bestand templates/thumb_image.php
	*	Zoek op mt_rand(1,2)
	*	Plaats tussen de () het getal van de nieuwe thumb ( toevoegen )

#	Script werkend maken voor meerdere schermresoluties

	*	Open bestand templates/header.php
	*	Verwijder // vooraan in regel 30 t/m 60
		-	Begint bij if (isset($_SESSION['width']))
		-	Eindigd bij }
	*	Verwijder regel 14 t/m 21
		-	Begint bij <!--
		-	Eindigd bij <!-- TOT HIER MAG HET VERWIJDERD WORDEN !!!!!!!!!!!!!!!!!!!!!! -->

#	Aanpassen contactformulier informatie
	
	*	Open het bestand includes/info.php	
	*	Gegevens tussen de """achter het = teken kunnen aangepast worden naar voorkeur
	*	De gegevens onder het blok niks aanpassen zijn nodig voor het inloggen. AUB niks eraan veranderen.
		
#	Aanpassen beschikbaarheid
	
	*	Bijgevoegd zit een excel file met daarin een tabblad waarop een planning voorbereid is
	*	Na aanpassen van dit bestand ga je naar
			-	Bestand
			-	Opslaan als webpagina
			-	Sla vervolgens het bestand op, op een plaats naar keuze, met de bestandsnaam beschikbaarheid.html ( andere naam kun je niet uploaden )
	*	Ga in je browser naar www.mijndomein.com/admin
	*	Je komt nu uit bij een log in scherm
	*	Log in met gebruiker: westeinde wachtwoord: borrel
	*	Zoek het bestand op wat net aangemaakt is ( beschikbaarheid.html )
	*	Klik op uploaden
	*	Beschikbaarheid is nu op de website aangepast