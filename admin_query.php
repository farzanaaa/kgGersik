<?php include('connect.php'); ?>

<?php
 if(isset($_POST['Login']))
 {
   $AdUsr =$_POST['AdUsr'];
   $AdPass =$_POST['AdPass'];
   $sql = "SELECT * FROM admins where AdUsr = '$AdUsr' AND AdPass = '$AdPass' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    // output data of each row
         ob_start();
        header("location:admin_page.php");
        ob_end_flush();
		$_SESSION['AdUsr'] = $AdUsr;
		exit();
	}
	else {
    echo "0 results";
	}

$conn->close();
}
?>