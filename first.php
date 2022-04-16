<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
</head>
<body>

hi
	<?php 
		
		$con = mysql_connect('localhost', 'root', '');

		if(!$con){
			echo "Not Connected";
		}

		if(!mysqli_select_db($con, 'information')){
			echo "Database not selected";
		}

		$userName = $_POST["ui-name"];
		$email = $_POST["ui-email"];

		$sql = "INSERTED INFO person (Name,Email) VALUES ('$ui-name', '$ui-email')";

		if(!mysqli_query($con, $sql)){
			echo "Not Connected";

		}
		else{
			echo "Inserted";

		}
		header("refresh:2;url=Index.html");
		
		echo $userName;
		echo $email;
		echo "hi";
?>


</body>
</html>
