consignes
===
* dire le nombre de mot dans le dictionnaire  
 
		 $nombre = count($dico);
		 var_dump($nombre);
		 int(336532)
 
* nombre de mot de 15 caractères    
		$mots15=[];  
		foreach ($dico as $key => $value) {  
		if (strlen($value)==15){  
			array_push($mots15, $value);  
		}  
		}  
		$nombremot15 = count($mots15);  
		echo($nombremot15);  
 * réponse = 12298  
* idem    

* combien de mots contiennent w 

		$motsW=[];
		foreach ($dico as $key => $value) {
				$char_list="w";
				if (strpbrk ($value , $char_list )==true){		
					array_push($motsW, $value);
					}
				}
		echo count($motsW);

 * réponse 537

* combien de mots finissent par q   
	
		$motsfinq=[];
		foreach ($dico as $key => $value) {
			if (substr($value, -1)=="q"){
				array_push($motsfinq, $value);
		}
		}
		echo count($motsfinq);

 * réponse 8