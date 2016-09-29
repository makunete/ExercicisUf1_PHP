<?php
$m = array( "Alibaba" => "y los quarenta ladrones",
            "Harry Potter" => "y el cáliz de fuego");

//afegim un element més
$m["Aníbal"] = "El caníbal";

//mostrem *tot* el contingut de l'array
print_r($m);
print( "<br>");

//Accedim a un element (mostrem només un element)
print( $m["Alibaba"]);
print( "<br>");

//Esborrem un element
unset( $m["Harry Potter"]);

//mostrem *tot* el contingut de l'array
print_r($m);
print( "<br>");

//1- Alibaba, Harry Potter, Aníbal

//2- Alibaba = y los quarenta ladrones, Harry Potter = y el cáliz de fuego, Aníbal = El caníbal

//3- $m["Hola"] = "caracola";

//4- print( $m["Alibaba"])

//5- unset( $m["Harry Potter"]);
?>




