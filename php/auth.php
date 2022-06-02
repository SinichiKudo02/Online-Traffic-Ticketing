<?php
if(session_status() !== PHP_SESSION_ACTIVE){
session_start();

}

include "connect.php";

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	
		$password = sha1($password);
		$query = "SELECT * FROM user WHERE username ='$username' AND password='$password'";
		$results = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($results);
    
        if(mysqli_num_rows($results) != 1){
            header('location: index.php?login=incorrect');
            exit();
        
        }
        else{

        $type = $row['usertype'];
        $_SESSION['id'] = $row['userID'];
        
        if($type == "admin"){
            header('location: Admin/home.php');
        }
        else if($type == "client"){
            header('location: Profile/home.php');
        }
        else if($type == "enforcer"){
            header('location: Enforcer/home.php');
        }

        
    }
}

  // USER LOGOUT  
if (isset($_POST['logout'])){
    echo '<script>alert("Welcome to Geeks for Geeks")</script>';
   echo "Clicked!";
   session_destroy();
   header('location: ../index.php');
 }

?>