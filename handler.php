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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $gender = $_POST['gender'];
            echo "<p>Your gender is: $gender</p>";
          } else {
            echo "<p>No data was submitted.</p>";
          }
        echo "<br>";
        $degree = $_REQUEST['degree'];
		echo "Your degree is " . $degree;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $bloodGroup = $_POST['blood-group'];
            echo "<p>Your blood group is: $bloodGroup</p>";
          } else {
            echo "<p> No data submitted.</p>";
          }
	?>
</body>
</html>
