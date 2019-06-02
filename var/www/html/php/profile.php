<?php


		 	$file = file_get_contents('json/person.json');
			$PersonList = json_decode($file,TRUE); 

		if (isset($data['password'])) {
			$password = trim($password);
		 	$new_password = trim($new_password); 
		 	
		
    	     $PersonList[0]['hashedPassword'] = $new_password;

    	     	foreach ($PersonList as $key => $value) {
    	     		if ($value['hashedPassword'] == ){
    	     		$PersonList[$key]['hashedPassword'] = $new_password;
    	     		}
    	     	}

			
			}



?>