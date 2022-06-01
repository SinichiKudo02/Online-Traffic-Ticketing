<?php
session_start();
$errors = array(); 
$popup = array();

include "connect.php";

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (count($errors) == 0) {
		$password = sha1($password);
		$query = "SELECT * FROM user WHERE username ='$username' AND password='$password'";
		$results = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($results);
    
        if(mysqli_num_rows($results) != 1){
        array_push($errors,"Wrong username/password combination!");
        }
        else{

        $type = $row['usertype'];
        $_SESSION['id'] = $row['userID'];
        
        if($type == "admin"){
            header('location: Admin/home.php');
        }
        else if($type == "client"){
            header('location: Client/home.php');
        }
        else if($type == "enforcer"){
            header('location: home/home.php');
        }

        }
    }
}

?>