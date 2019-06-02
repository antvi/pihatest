<?php

if (isset($_SESSION['login']) {

header('Location: profile.html')

});



	function redirect() {
		header('Location: reg.html');
		exit();
}


	if (!isset($_GET['email']) || !isset($_GET['token'])) {
		redirect();
	} else {
		 {

		/* $confirm = trim($confirm);
		 $NewConfirm = 1;*/

	  	  $file = file_get_contents('json/person.json');

    	     $PersonList = json_decode($file,TRUE); 

    	     $PersonList[0]['confirm'] = '1';

    	     	foreach ($PersonList as $key => $value) {
    	     		if ($value['confirm'] == '0'){
    	     		$PersonList[$key]['confirm'] = '1';
    	     		}
    	     	}
        

       file_put_contents('json/person.json',json_encode($PersonList));
		unset($PersonList); 

		header('Location: profile.html')};

		}
	}
?>