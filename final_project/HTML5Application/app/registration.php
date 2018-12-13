<?php require_once "../services/validation_services.php"; ?>
<?php require_once "../services/person_services.php"; ?>
<?php

$nameErr = $idErr = $emailErr = $genderErr = $dateErr = $bloodErr = $passErr1 =$passErr2 = "";
$name =$userid  =$email = $gender = $date = $blood = $password2 = "";
?>


	
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
    ///Name Validation
    $name=trim($_POST['name']);
    if (validateName1($name) == false){
       $isvalid = false;
       $nameErr = "Please Enter your name.<br/>";
    }
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <div id="head">
            <h1 id="head1"> 
        <b style="color:blue">C</b>
	<b style="color:yellow">I</b>
	<b style="color:black">N</b>
	<b style="color:green">E</b>
        <b style="color:black">-</b>
	<b style="color:brown">B</b>
	<b style="color:purple">A</b>
	<b style="color:green">S</b>
	<b style="color:blue">E</b>         
    </h1>
</div>
        <div id="nav">
        <ul class="ul">
            <li class="li"><a href="home.php">Home</a></li>
            <li class="li"><a href="#">Category</a>
                <ul class="ul">
                    <li class="li"><a href="action_movies.php">Action</a></li>
                    <li class="li"><a href="#">Adventure</a></li>
                    <li class="li"><a href="#">Drama</a></li>
                    <li class="li"><a href="#">Thriller</a></li>
                    <li class="li"><a href="#">Horror</a></li>
                    <li class="li"><a href="#">Science Fiction</a></li>
                </ul>
            
            </li>
            <li class="li"><a href="#">Latest Movies</a></li>
            <li class="li"><a href="#">Contact Us</a></li>
            <li class="li"><a href="#">Login</a></li>
            <li class="li"><a href="registration.php">Registration</a></li>
        </ul> 
    </div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <table align="center" cellpadding="10" cellspacing="10" >
		<tr>
			<th id="th1" colspan="5">User Information</th>
		</tr>
		<tr>
			<th><label for="user">Name </label></th>
			<td>
                            <input type="text" id="user" name="name" placeholder="Enter Your Full Name Here" size="71">
                            <span class="error">* <?php echo $nameErr;?></span>
                        </td>
		</tr>
		<tr>
			<th><label for="userid">User Id</label></th>
			<td>
                            <input type="text" id="userid" name="userid" placeholder="Enter a userid" size="71">
                            <span class="error">* <?php echo $idErr;?></span>
                        </td>
		</tr>
		<tr>
			<th><label for="email">Email </label></th>
			<td>
                            <input type="text" id="email" name= "email" placeholder="Enter Your Mail" size="71">
                            <span class="error">* <?php echo $emailErr;?></span>
                        </td>
		</tr>
		<tr>
			<th><label>Date of Birth</label>
			<td><input type="number" name="day" size="11" min="1" max="31" placeholder="Day" >/
			<input type="number" name="month" size="11" min="1" max="12" placeholder="Month">/
			<input type="number" name="year" size="11" min="1990" max="2016" placeholder="Year">
                        <span class="error">* <?php echo $dateErr;?></span>
			</td>
		</tr>
		<tr>
			<th><label>Gender</label></th>
			<td>
			<input type="radio" name="gender" value="Male"> Male
			<input type="radio" name="gender" value="Female"> Female
			<input type="radio" name="gender" value="Transgender"> Transgender
                        <span class="error">* <?php echo $genderErr;?></span>
			</td>
		</tr>
		<tr>
			<th><label for="blood"> Blood Group</label></th>
			<td>
				<select id="blood" name="blood">
					<option value="empty">SELECT YOUR BLOOD GROUP</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>						
				</select>
                            <span class="error">* <?php echo $bloodErr;?></span>
			</td>
		</tr>
		<tr>
			<th>Password</th>
			<td>
				<input type="password" name="password" value = "" placeholder="Type your password">
                                <span class="error">* <?php echo $passErr1;?></span>
			</td>
		</tr>
		<tr>
			<th>Re-Enter Password</th>
			<td>
				<input type="password" name="password2" value = "" placeholder="Type password again">
                                <span class="error">* <?php echo $passErr2;?></span>
			</td>
		</tr>
		<tr>
			<th></th>
			<td id="td1">
				<input type="submit" name="Submit" value="SUBMIT">
				<input type="reset" name="reset" value="RESET">
			</td>
		</tr>
	</table>
</form>
    </div>
</body>
</html>
