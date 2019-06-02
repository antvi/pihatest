<?php 

$msg = "";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_SESSION['login'])) {

header('Location: profile.php') ;
} else {

	$login = $_POST['login'];
	$email = $_POST['email'];
	$password = $_POST['password'];


		$token = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789qwerty!$/()*';
        $token = str_shuffle($token);
        $token = substr($token, 0, 10);
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    	$file = file_get_contents('json/person.json');



        $PersonList[] = array(
                      'login'=>$login,
                      'email' => $email,
                      'password' =>$hashedPassword,
                      'token'=>$token,
                      'confirm'=>0
                            ); 
        file_put_contents('json/person.json',json_encode($PersonList));
        unset($PersonList[]); 


        include_once "PHPMailer/PHPMailer.php";

                $mail = new PHPMailer();
                $mail->setFrom('support@gmail.com');
                $mail->addAddress($email, $name);
                $mail->Subject = "Verify email";
                $mail->isHTML(true);
                $mail->Body = "
                    <a href='localhost/PHPEmailConfirmation/confirm.php?email=$email&token=$token'>Click</a>
                ";

                if ($mail->send())
                    $msg = "Verify your email";

                else
                    $msg = "Error, try again";
               

      }
?>