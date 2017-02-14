<?php 
	$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
	$dico = explode("\n", $string);
	echo'<pre>';
	
	echo count($dico);


// $mots15=[];
// foreach ($dico as $key => $value) {
// if (strlen($value)==15){
// 	array_push($mots15, $value);
// }
// }
// echo count($mots15);




$motsW=[];
foreach ($dico as $key => $value) {
		if (strpbrk ($value , "w" )==true || strpbrk ($value , "W" )==true ){		
			array_push($motsW, $value);
			}
		}
var_dump($motsW);
echo count($motsW);



// $motsfinq=[];
// foreach ($dico as $key => $value) {
// 	if (substr($value, -1)=="q"){
// 		array_push($motsfinq, $value);
// 	}
// }
// echo count($motsfinq);
?>