<?php 
$symbols ="!@#$%&*_";
$numbers="0123456789";
$uppercase="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$lowercase="abcdefghijklmnopqrstuvwxyz";


$Symbols = $_GET["Symbols"] ?? false;
$Numbers = $_GET["Numbers"] ?? false;
$Uppercase = $_GET["Upper"] ?? false;

if ($Symbols==true) {
  $lowercase = $lowercase .$symbols;
} if ($Numbers==true) {
  $lowercase = $lowercase .$numbers;
}if ($Uppercase==true) {
  $lowercase = $lowercase .$uppercase;
};


$password = substr( str_shuffle($lowercase), 0, $_GET["quantity"] ?? false );

?>