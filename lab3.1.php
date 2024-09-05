<!DOCTYPE html>
<html>
<head>
	<title>Name Form</title>
</head>
<body>
	<form action="handler.php" method="request">
    <fieldset>
        <legend>
		<label for="name">Name:</label>
        </legend >
		<input type="text" id="name" name="name">
		<br><hr><br>
		<input type="submit" value="Submit">
    </fieldset> 
    <fieldset>
        <legend>
		<label for="name">Email:</label>
        </legend >
		<input type="email" id="email" name="email">
		<br><hr><br>
		<input type="submit" value="Submit">
    </fieldset>
    <fieldset>
        <legend>
        <label for="dob">Date of Birth:</label>
		</legend>
        <input type="date" id="dob" name="dob">
        <br><hr><br>
		<input type="submit" value="Submit">    
    </fieldset>
    <fieldset>
        <legend>
        <label for="gender">Gender:</label>
        </legend>
        
      <input type="radio" id="male" name="gender" value="male">
      <label for="male">Male</label>
      
      <input type="radio" id="female" name="gender" value="female">
      <label for="female">Female</label>
      
      <input type="radio" id="other" name="gender" value="other">
      <label for="other">Other</label>
		
		<br><hr><br>
		<input type="submit" value="Submit">
    </fieldset>
    <fieldset>
        <legend>
        <label for="degree">Degree:</label>
        </legend>
        <input type="Checkbox" id="degree" name="degree" value="SSC">SSC
        <input type="Checkbox" id="degree" name="degree" value="HSC">HSC
        <input type="Checkbox" id="degree" name="degree" value="BSc">BSc
        <input type="Checkbox"id="degree" name="degree" value="MSc">MSc
		
		<br><hr><br>
		<input type="submit" value="Submit">
    </fieldset>
    <fieldset>
        <legend>
        <label for="blood-group">BLOOD GROUP :</label>
        </legend>
        <select id="blood-group" name="blood-group">
        <option value="text"> Enter your blood group </option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
      </select>
      <br><hr><br>
		<input type="submit" value="Submit">
</fieldset>               
<br><br>
	</form>
	
</body>
</html>
