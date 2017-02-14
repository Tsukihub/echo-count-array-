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
// $nombremot15 = count($mots15);
// echo($nombremot15);



// $motsW=[];
// foreach ($dico as $key => $value) {
// 		$char_list="w";
// 		if (strpbrk ($value , $char_list )==true){		
// 			array_push($motsW, $value);
// 			}
// 		}

// echo count($motsW);



$motsfinq=[];
foreach ($dico as $key => $value) {
	if (substr($value, -1)=="q"){
		array_push($motsfinq, $value);
	}
}
echo count($motsfinq);
?>