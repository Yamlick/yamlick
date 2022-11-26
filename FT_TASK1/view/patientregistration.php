<?php include "../Control/validpatientregistration.php"; ?>

<!Doctype html>
<html>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Registration Form</legend>

			<label>Frist Name:</label>
			<input type="text" name="fname"  required value = "<?php echo $validatelname; ?>">

			<br><br>

			<label>Last Name:</label>
			<input type="text" name="lname" required value = "<?php echo $validatelname; ?>">

			<br><br>

			<label>Gender:</label>
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male")?> value= "Male" > 
			<label>Male</label>
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female")?> value= "Female" > 
			<label>Female</label>
			<?php echo $validateradio1; ?>

			

			<br><br>

           

            <label>BPCONDITION:</label>
			<input type="checkbox" id="BPCONDITION" name="BPH[]" value="BPH"> 
			<label>BP HIGH</label>
			<input type="checkbox" id="BPCONDITION" name="BPL[]" value="BPL">
			<label>BP LOW</label>
            <input type="checkbox" id="BPCONDITION" name="BPN[]" value="BPN">
			<label>BP NORMAL</label>
			<?php echo $validatecheckbox; ?>

			<br><br>

			<label>Age:</label>
			<input type="number" name="age" required value = "<?php echo $age; ?>">

			<br><br>

			<label>Blood Group:</label> <?php echo $validatebg ?>
			<select name="bg">
				<option>A ve(+)</option>
				<option>A ve(-)</option>
				<option>B ve(+)</option>
				<option>B ve(-)</option>
				<option>O ve(+)</option>
				<option>O ve(-)</option>
				<option>AB ve(+)</option>
				<option>AB ve(-)</option>
			</select>
		
			<br><br>

			

			<label>Email:</label>
			<input type="text" name="email" required value = "<?php echo $email; ?>">

			<br><br>

		

			

			

			<label>Username</label>
			<input type="text" name="uname" required value = "<?php echo $uname; ?>">
			<br><br>

			<label>Password</label>
			<input type="text" name="pass" required value = "<?php echo $pass; ?>">
			<br><br>


			<input type="submit" name="submit" value="Registration">


			<br><br>
			<br><br>
			

			
			
			

		</fieldset>

	</form>
