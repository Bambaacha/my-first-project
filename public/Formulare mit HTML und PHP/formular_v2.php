<?php
/**
 * Created by PhpStorm.
 * User: miltos
 * Date: 14.02.17
 * Time: 10:22
 */
if(trim($_POST["name"]) == "" || trim($_POST["zimmerNr"]) == "")
{
	echo "Bitte Name und Zimmer-Nr eingeben";
	echo "<br /><a href='formular_v1.html'>zurück</a>";
}
else
{
	echo "Name: ".$_POST["name"]."<br />";
	echo "Zimmer Nummer: ".$_POST["zimmerNr"]."<br />";
	echo "Käse Sorten: ";
	if(isset($_POST["chxCa"])) echo "Camembert, ";
	if(isset($_POST["chxEm"])) echo "Emmentaler, ";
	if(isset($_POST["chxEd"])) echo "Edamer, ";
	if(isset($_POST["chxKr"])) echo "Kraversal, ";
	if(!empty($_POST["wunsch"])) echo "<br/>Extra Wunsch: ".$_POST["wunsch"];
	echo "<br/>Zahlungsart: ".$_POST["optZahlArt"]."<br/>";
}