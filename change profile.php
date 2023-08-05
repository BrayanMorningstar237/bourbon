<?php
session_start();
include "config bourbon.php";
$current_user = $_SESSION["username"];
$user_pass = $_SESSION["pass"];
$user_email1 = $_SESSION["email"];

if (isset($_FILES["media_name"]["tmp_name"])) {
    $date = new DateTime();
    $unique_pic = date_format($date, "_Y_m_d H_i_s");
	$userinfo = "SELECT * FROM admins WHERE email='$user_email1' AND password='$user_pass'";
$userinfo_result = $conn->query($userinfo);
if ($userinfo_result->num_rows > 0) {
    while($row = $userinfo_result->fetch_assoc()) {
        $userprename = $row["name"];
    }
	$target_dir = "abdel/media/";
    $add = $target_dir."BourBon_".$userprename."_".$unique_pic."_";
$target_file = $add . basename($_FILES["media_name"]["name"]);

if(move_uploaded_file($_FILES["media_name"]["tmp_name"], $target_file)) {
    /*add file info to database*/
    
$escape = $conn -> real_escape_string($target_file);
//    
$update_admin = "UPDATE `admins` SET profile='$escape' WHERE email='$user_email1' AND password='$user_pass'";

if ($conn->query($update_admin) === TRUE) {
            echo $escape;
            }else {
                echo "Error updating record: " . $conn->error;
           }
    
} else {
	echo "Error updating record: " . $conn->error;
}
	
} else {
		$userinfo = "SELECT * FROM orders WHERE email='$user_email1' AND password='$user_pass'";
$userinfo_result = $conn->query($userinfo);
if ($userinfo_result->num_rows > 0) {
    while($row = $userinfo_result->fetch_assoc()) {
        $userprename = $row["name"];
    }
	$target_dir = "abdel/media/";
    $add = $target_dir."BourBon_".$userprename."_".$unique_pic."_";
$target_file = $add . basename($_FILES["media_name"]["name"]);

if(move_uploaded_file($_FILES["media_name"]["tmp_name"], $target_file)) {
    /*add file info to database*/
    
$escape = $conn -> real_escape_string($target_file);
//    
$update_admin = "UPDATE `orders` SET senderimg='$escape' WHERE email='$user_email1' AND password='$user_pass'";

if ($conn->query($update_admin) === TRUE) {
            echo $escape;
            }else {
                echo "Error updating record: " . $conn->error;
           }
    
} else {
	echo "Error updating record: " . $conn->error;
}
	
}
}	
    
    
}

?>