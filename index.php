
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">    
    

    <title>&nbsp; De schadeverzekeraar met een breed pakket aan schadeverzekeringen | Unigarant</title>
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   		<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta property="og:title" content="De schadeverzekeraar met een breed pakket aan schadeverzekeringen" />
    <meta property="og:type" content="company" />
    <meta property="og:url" content="http://www.unigarant.nl/" />
    <meta property="og:site_name" content="Unigarant" />
    <meta name="robots" content="noindex, nofollow" />
	<meta name="robots" content="none" />
    
      
    <link rel="shortcut icon" href="http://www.unigarant.nl/favicon.ico" />
    <link rel="stylesheet" href="css/stylesheet.css">
    
    <script language="javascript">
      
			function tonen(divID)
			{
				
    			//Hide all divs that start with "popup_"
    			$('[id^="popup_"]').hide();
                
                if(divID){		
				    //show only clicked
				    document.getElementById(divID).style.display = "block";
			     }
			}       
		</script>
    
    
    
    
    
    
</head>

<body>        
<div class="container">

<center><h1>Dynamisch Organogram</h1></center>

<!-- 
OPMERKING: Hier staan alle afdelingen die te zien zijn in het organogram
-->

<div class="blokken">
	<a href="#" onClick="tonen('popup_0')"><div class="blok_top">Directie</div></a>
	<div class="blokken_midden">
        <div class="blok_links">
	       	<a  href="#" onClick="tonen('popup_1')"><div class="blok_blauw">Directie-assistenten</div></a>
        	<a  href="#" onClick="tonen('popup_2')"><div class="blok_blauw">Internal Auditing</div></a>
        	<a  href="#" onClick="tonen('popup_3')"><div class="blok_blauw">Compliance</div></a>
        </div>
        <div class="blok_rechts">        	
        	<a  href="#" onClick="tonen('popup_4')"><div class="blok_blauw">Personeel & Organisatie</div></a>
        	<a  href="#" onClick="tonen('popup_5')"><div class="blok_blauw">Sales</div></a>
        	<a  href="#" onClick="tonen('popup_6')"><div class="blok_blauw">Verkoop Binnen en Klantcontact</div></a>
        </div>
    </div>
    <div class="blok_onder">
        <div class="blok_onder_1">
        	<div class="blok_wit">ANWB Verzekeren &amp; Marketing</div>
        	<a  href="#" onClick="tonen('popup_8')"><div class="blok_lichtblauw">Marketing & Communicatie</div></a>
        	<a  href="#" onClick="tonen('popup_7')"><div class="blok_lichtblauw">ANWB Verzekeren</div></a> 
        </div>
        <div class="blok_onder_2">
        	<div class="blok_wit">Financi&euml;n &amp; Services</div>     	
        	<a  href="#" onClick="tonen('popup_9')"><div class="blok_lichtblauw">Financi&euml;le Zaken</div></a>
        	<a  href="#" onClick="tonen('popup_10')"><div class="blok_lichtblauw">ICT</div></a>
            <a  href="#" onClick="tonen('popup_18')"><div class="blok_lichtblauw">Facilities</div></a>
            <a  href="#" onClick="tonen('popup_19')"><div class="blok_lichtblauw">Inkoop</div></a>
        	<a  href="#" onClick="tonen('popup_11')"><div class="blok_lichtblauw">Actuariaat</div></a>
        	<a  href="#" onClick="tonen('popup_12')"><div class="blok_lichtblauw">Riskmanagement</div></a>
        	
        
        </div>
        <div class="blok_onder_3">
        	<div class="blok_wit">Verzekeringstechniek</div>
        	<a  href="#" onClick="tonen('popup_13')"><div class="blok_lichtblauw">Juridische Zaken</div></a>
        	<a  href="#" onClick="tonen('popup_14')"><div class="blok_lichtblauw">Verzekeringstechniek</div></a>
        	<a  href="#" onClick="tonen('popup_15')"><div class="blok_lichtblauw">Stichting MRT</div></a>
        
        </div>

        <div class="blok_onder_4">
        	<div class="blok_wit">Innovatie</div>
        	<a  href="#" onClick="tonen('popup_16')"><div class="blok_lichtblauw">Innovatie</div></a>
        	<a  href="#" onClick="tonen('popup_17')"><div class="blok_lichtblauw">Schade</div></a>
        
        </div>
    </div>
</div>


<!-- 
OPMERKING: Dit zijn alle popups, maar door css niet zichtbaar gemaakt. Door te klikken wordt deze zichtbaar
Alle id's moeten uniek zijn en overeen komen met de link (onclick="tonen('unieke waarde')")
 -->
<?php 
{
	?>
<div class="popup" id="popup_0"><?php include("algemeen_directeur.php"); ?></div>
<div class="popup" id="popup_1"><?php include("directie-assistenten.php"); ?></div>
<div class="popup" id="popup_2"><?php include("internal_auditing.php"); ?></div>
<div class="popup" id="popup_3"><?php include("compliance.php"); ?></div>

<div class="popup" id="popup_4"><?php include("personeel_organisatie.php"); ?></div>
	<div class="popup" id="popup_4_1"><?php include("p_en_o_administratie.php"); ?></div>
	<div class="popup" id="popup_4_2"><?php include("p_en_o_advies.php"); ?></div>

<div class="popup" id="popup_5"><?php include("sales.php"); ?></div>
	<div class="popup" id="popup_5_1"><?php include("corporate.php"); ?></div>
    <div class="popup" id="popup_5_2"><?php include("intermediar.php"); ?></div>
    <div class="popup" id="popup_5_3"><?php include("tweewielhandel.php"); ?></div>

<div class="popup" id="popup_6"><?php include("verkoop_binnen_klantcontact.php"); ?></div>
	<div class="popup" id="popup_6_1"><?php include("frontoffice.php"); ?></div>
    <div class="popup" id="popup_6_2"><?php include("verkoop_binnen.php"); ?></div>
    <div class="popup" id="popup_6_3"><?php include("debiteuren_agent.php"); ?></div>
    <div class="popup" id="popup_6_4"><?php include("support.php"); ?></div>

<div class="popup" id="popup_8"><?php include("marketing_communicatie.php"); ?></div>
	<div class="popup" id="popup_8_1"><?php include("marketing_productmanagement.php"); ?></div>
    <div class="popup" id="popup_8_2"><?php include("marketing_marktmanagement.php"); ?></div>
    <div class="popup" id="popup_8_3"><?php include("marketing_marketing_intellingence.php"); ?></div>
    <div class="popup" id="popup_8_4"><?php include("marketing_team_communicatie.php"); ?></div>

<div class="popup" id="popup_7"><?php include("ANWB_verzekeren.php"); ?></div>

<div class="popup" id="popup_9"><?php include("financieel_zaken.php"); ?></div>
    <div class="popup" id="popup_9_1"><?php include("financieel_zaken_control.php"); ?></div>
    <div class="popup" id="popup_9_2"><?php include("financieel_zaken_control-rest.php"); ?></div>

<div class="popup" id="popup_10"><?php include("ict.php"); ?></div>
    <div class="popup" id="popup_10_1"><?php include("technisch_beheer.php"); ?></div>
    <div class="popup" id="popup_10_2"><?php include("business_intelligence.php"); ?></div>
    <div class="popup" id="popup_10_3"><?php include("analyse_beheer.php"); ?></div>
    <div class="popup" id="popup_10_4"><?php include("productinrichting.php"); ?></div>
    <div class="popup" id="popup_10_5"><?php include("implementatiemanagement.php"); ?></div>
    <div class="popup" id="popup_10_6"><?php include("service_contractmanagement.php"); ?></div>
    
<div class="popup" id="popup_18"><?php include("facilities.php"); ?></div>  
    <div class="popup" id="popup_18_1"><?php include("backoffice_facilities.php"); ?></div>
    <div class="popup" id="popup_18_2"><?php include("servicedesk.php"); ?></div>
    <div class="popup" id="popup_18_3"><?php include("Huisvesting.php"); ?></div>

<div class="popup" id="popup_19"><?php include("inkoop.php"); ?></div>  

<div class="popup" id="popup_11"><?php include("actuariaat.php"); ?></div>
    <div class="popup" id="popup_11_1"><?php include("tariferen.php"); ?></div>
    <div class="popup" id="popup_11_2"><?php include("rapporteren.php"); ?></div>
    <div class="popup" id="popup_11_3"><?php include("reservering.php"); ?></div>
    <div class="popup" id="popup_11_4"><?php include("herverzekeren.php"); ?></div>

<div class="popup" id="popup_12"><?php include("riskmanagement.php"); ?></div>

<div class="popup" id="popup_13"><?php include("juridische_zaken.php"); ?></div>

<div class="popup" id="popup_14"><?php include("verzekeringstechniek.php"); ?></div>
    <div class="popup" id="popup_14_1"><?php include("acceptatie.php"); ?></div>
    <div class="popup" id="popup_14_2"><?php include("klachtenmanagement.php"); ?></div>
    <div class="popup" id="popup_14_3"><?php include("speciale_zakenk.php"); ?></div>

<div class="popup" id="popup_15"><?php include("stichting_MRT.php"); ?></div>
    <div class="popup" id="popup_15_1"><?php include("mrt_den_haag.php"); ?></div>
    <div class="popup" id="popup_15_2"><?php include("mrt_hoogeveen.php"); ?></div>
   
<div class="popup" id="popup_16"><?php include("proces.php"); ?></div>
    <div class="popup" id="popup_16_1"><?php include("innovatie-functies.php"); ?></div>

<div class="popup" id="popup_17"><?php include("schade.php"); ?></div>
	<div class="popup" id="popup_17_1"><?php include("business-change.php"); ?></div>
    <div class="popup" id="popup_17_2"><?php include("materiele_schade.php"); ?></div>
    <div class="popup" id="popup_17_3"><?php include("expertise-schadeherstel.php"); ?></div>
    <div class="popup" id="popup_17_4"><?php include("personenschade.php"); ?></div>


<?php
}
?>


</div>
<div class="tip"><b>TIP:</b> gebruik CTRL +/- om te zoomen</div>
<div class="footer">
	<div class="footer_anwb"><img src="images/anwb.png" /></div>
	<div class="footer_unigarant"><img src="images/unigarant.png" /></div>
</div>

</body>
</html>