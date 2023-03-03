<!DOCTYPE html>
<html>
<head>
	<title>Handler page</title>
</head>
<body>
	<?php
		$name = $_REQUEST['name'];
		echo "Hello, " . $name . "!";
        echo "<br>";
        $email = $_REQUEST['email'];
		echo "Hello, " . $email . "!";
        echo "<br>";
        $dob = $_REQUEST['dob'];
		echo "Your date of birth is " . $dob;
        echo "<br>";
        $gender = $_REQUEST['gender'];
            echo "Your gender is:". $gender;
          
        echo "<br>";
        $degree = $_REQUEST['degree'];
		echo "Your degree is " . $degree;

        $bloodGroup = $_REQUEST['blood-group'];
            echo "Your blood group is:". $bloodGroup;
          
	?>
</body>
</html>
