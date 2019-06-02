<?php


$msg = "";
$login = $_POST['login'];
$password = $_POST['password'];
$file = file_get_contents('json/person.json');
$PersonList = json_decode($file,TRUE); 


if (isset($_SESSION['login'])){

header('Location: profile.html')};


if (($PersonList[0]['login'] == $login) and ($PersonList[0]['hashedPassword'] == $password) and ($PersonList[0]['confirm'] == '1' )) {
          
         header('Location: profile.html');
        
		 unset($PersonList);}
    

  } else {

		$msg = "Please check your inputs data";
  }


 ?>