<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php if($_SERVER["REQUEST_METHOD"]=="GET") { ?>
			<h1>Registration Form</h1>
			<hr />

			<h2>Please, fill below fields correctly</h2>
			<form action="index.php" method="post">
				<dl>
					<!-- Fields to complete -->
					<dt>Name</dt>
					<dd>
						<input type="text" name="name"  />
					</dd>

					<dt>Email</dt>
					<dd>
						<input type="text" name="email" >
					</dd>

					<dt>Username</dt>
					<dd>
						<input type="text" name="user" >
					</dd>

					<dt>Password</dt>
					<dd>
						<input type="text" name="pass" >
					</dd>

					<dt>Confirm Password</dt>
					<dd>
						<input type="text" name="confirmation" >
					</dd>

					<dt>Date of Birth</dt>
					<dd>
						<input type="text" name="date">
					</dd>

					<dt>Gender</dt>
					<dd>
						<select name="gender" >
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</dd>

					<dt>Marital Status</dt>
					<dd>
						<select name="status" >
							<option value="single">Single</option>
							<option value="married">Married</option>
							<option value="widowed">Widowed</option>
							<option value="divorced">Divorced</option>
						</select>
					</dd>

					<dt>Address</dt>
					<dd>
						<input type="text" name="address"  />
					</dd>

					<dt>City</dt>
					<dd>
						<input type="text" name="city"  />
					</dd>

					<dt>Postal Code</dt>
					<dd>
						<input type="number" name="postcode"  />
					</dd>

					<dt>Home Phone</dt>
					<dd>
						<input type="number" name="homephone"  />
					</dd>

					<dt>Mobile Phone</dt>
					<dd>
						<input type="number" name="mobilephone"  />
					</dd>

					<dt>Credit Card Number</dt>
					<dd>
						<input type="number" name="credit"  />
					</dd>

					<dt>Credit Card Expiry Date</dt>
					<dd>
						<input type="text" name="expirydate"  />
					</dd>

					<dt>Monthly Salary</dt>
					<dd>
						<input type="text" name="salary"  />
					</dd>

					<dt>Web Site URL</dt>
					<dd>
						<input type="url" name="url"  />
					</dd>

					<dt>Overall GPA</dt>
					<dd>
						<input type="text" name="gpa"  />
					</dd>
					<br />
					<div>
						<input type="submit" value="Sign up!">
					</div>
				</dl>
			</form>

		<?php } else {
			$name = $_POST["name"];
			$email = $_POST["email"];
			$user = $_POST["user"];
			$pass = $_POST["pass"];
			$pass2 = $_POST["confirmation"];
			$date = $_POST["date"];
			$gender = $_POST["gender"];
			$status = $_POST["status"];
			$address = $_POST["address"];
			$city = $_POST["city"];
			$postal = $_POST["postcode"];
			$home = $_POST["homephone"];
			$mobile = $_POST["mobilephone"];
			$credit = $_POST["credit"];
			$expirydate = $_POST["expirydate"];
			$salary = $_POST["salary"];
			$url = $_POST["url"];
			$gpa = $_POST["gpa"];
			$res = "Validation error";
			if (preg_match("/^[[:alpha:]]{2,}$/i", $name))
			if (preg_match("/^[[:alnum:]]+@[[:alnum:]]+\.[[:alpha:]]{1,3}$/i", $email))
			if (preg_match("/^.{5,}$/i", $user))
			if (preg_match("/^(?=\w{6,10}$)(?=[^a-z]*[a-z])(?=(?:[^A-Z]*[A-Z]){3})(?=\D*\d)/i", $pass))
			if ($pass == $pass2)
			if (preg_match("/^\d{2}\.\d{2}\.\d{4}$/i", $date))
			if (preg_match("/^(Male|Female)$/i", $gender))
			if (preg_match("/^(Single|Married|Divorced|Widowed)$/i", $status))
			if (preg_match("/^.+$/i", $address))
			if (preg_match("/^[[:alpha:]]+$/i", $city))
			if (preg_match("/^[0-9]{6}$/i", $postal))
			if (preg_match("/^[0-9]{9}$/i", $mobile))
			if (preg_match("/^[0-9]{9}$/i", $home))
			if (preg_match("/^[0-9]{16}$/i", $credit))
			if (preg_match("/^\d{2}\.\d{2}\.\d{4}$/i", $expirydate))
			if (preg_match("/^UZS( +|)[\d,\.]+$/i", $salary))
			if (preg_match("/^(http|https):\/\/(www|).+$/i", $url))
			if (preg_match("/^([0-3]{1}(\.[0-9]{1,2}|)|4(\.[0-5]{1}[0-9]{0,1}|))$/i", $gpa))
				$res = "Thank you for registration!";
		?>

			<h1><?=$res?></h1>
		
		<?php } ?>
	</body>
</html>
