<?php
	session_start();
	
	if( isset($_REQUEST['Login'])){
		$uname = $_REQUEST['uname'];
		$password =  $_REQUEST['password'];
		
		if(empty(trim($uname)) || empty(trim($password))){
			echo "Null submission found!";
		}else{

			$file = fopen('info.txt', 'r');
			$user = fread($file, filesize('info.txt'));
			$data = explode('/', $user);
			$dlength=sizeof($data);
            for($i=0;$i<$dlength;$i++){
			if( trim($data[$i]) == $uname && trim($data[$i+2]) == $password){
				$_SESSION['uname'] = $uname;
				$_SESSION['pass'] = $password;

				header("location: home.php");
			}
		}
		echo "invalid uname/password";
		}

	}else{
		//echo "invalid request! please login first!";
		header("location: login.php");
	}
?>