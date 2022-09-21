 <?php
		if(isset($_POST['email'])){
			$to = "udayka782@gmail.com"; // this is my Email address
			$from = $_POST['email']; // sender
			$subject = "Resume in Github";
			$headers = "From:" . $from;
			$headers2 = "From:" . $to;
			
			$message ="Name : ".$_POST['name']."\n".
			"Contact : ".$_POST['mobile']."\n".
			"Email : ".$_POST['email']." \n".
			"Subject : " .$_POST['subject']."\n".
			"Message :".$_POST['msg'];
			
			$status= mail($to,$subject,$message,$headers);

			echo "<div><p align='center'> Mail Sent <br> Thank you...! " . $_POST['name'] . ", we will contact you shortly.</p><div>";

			header('Location:index.php');
		}
