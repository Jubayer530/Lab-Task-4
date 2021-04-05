        <?php 
            $name="";
            $err_name="";
            $uname="";
            $err_uname="";
            $password="";
            $err_password="";
            $conpass="";
            $err_conpass="";
            $email="";
            $err_email="";
            $phone="";
            $err_phone="";
            $address="";
            $err_address="";
            $birth="";
            $err_birth="";
            $gender="";
            $err_gender="";
            $where="";
            $err_where="";
            $bio="";
            $err_bio="";

            if($_SERVER['REQUEST_METHOD']== "POST"){
                if(empty($_POST["name"])){
                    $err_name="Name is required";
                }
                else{
					$name=$_POST["name"];
				}
				if(empty($_POST["uname"])){
					$err_uname="Username is Required";
				}
				else if(strlen($_POST["uname"])<6){
					$err_uname="*Username should be at least 6 characters";
				}
                elseif (strpos($_POST["uname"]," ")){
                    $err_uname="Username should not contain any space";
                }
				else{
					$uname=$_POST["uname"];
				}
				if(empty($_POST["password"]))
		 		{
			 	$err_password="Password is Required";
		 		}
		 		elseif(htmlspecialchars($_POST["password"]))
		 		{
			 	$err_password=["HTML KeyWords Used"];
				}
		 		elseif (strlen($_POST["password"])<6) {
		 		$err_password="Password must be 6 charachters long";
		 		}
		 		elseif(!strpos($_POST["password"],"#"))
		 		{
			    $err_password="Password should contain a special character";
			    }
		 		elseif(!is_numeric($_POST["password"]))
		 		{	
			 	$err_password="Password should contain at least one Numeric values";
		 		}
		 		elseif(!ctype_upper($_POST["password"]))
		 		{
			 	$err_password="Password should contain one UpperCase values";
		 		}
		 		elseif(!ctype_lower($_POST["password"]))
		 		{
			 	$err_password="Password should contain one LowerCase values";
		 		}
				elseif(strpos($_POST["password"]," "))
		 		{
			 	$err_password="Password should not contain white space";
		 		}
		 		else
		 		{
			 	$pass=$_POST["password"];
				}		
				if(empty($_POST["conpass"]))
		 		{
			 	$err_conpass="Password is Required";
		 		}
		 		else
		 		{
			 	$pass=$_POST["conpass"];
				}		
                if(empty($_POST["email"])){
					$err_email="Mail address required";
				}
				else{
					$email=$_POST["email"];
				}
				if (!isset($_POST["gender"])){
                    $err_Gender= "Select a gender";
                }
				else{
					if (isset($gender) && $gender=="Male"){
						$gender=$_POST["gender"];
					}
					else{
						if (isset($gender) && $gender=="Female"){
							$gender=$_POST["gender"];
						}
				    }
				}
				if(empty($_POST["Bio"])){
					$err_bio="Bio required";
				}
				else{
					$bio=$_POST["bio"];
				}
            }
		?> 
       <html>
			<head></head>
			<body>
			<form action="" method="POST">
			<fieldset>
			<legend><b>Club Member Registration</b></legend
				<table>
            	<tr>
					<td><span>Name</span></td>
                	<td>:<input type="text" name="name" value="<?php echo $name;?>">
                	<span><?php echo $err_name;?></span></td><br>
				<tr>
					<td><span>Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $uname;?>">
					<span><?php echo $err_uname;?></span></td><br>
				</tr>
				<tr>
				    <td><span>Password</span></td>
					<td>:<input type="Password" name="password" value="<?php echo $password;?>">
					<span><?php echo $err_password;?></span></td><br>
				</tr>
                <tr>
				    <td><span>Confirm Password</span></td>
					<td>:<input type="Password" name="conpas" value="<?php echo $conpass;?>">
					<span><?php echo $err_conpass;?></span></td><br>
				</tr>
                <tr>
				    <td><span>Email</span></td>
					<td>:<input type="text" name="email" value="<?php echo $email;?>">
					<span><?php echo $err_email;?></span></td><br>
				</tr>
                <tr>
				    <td><span>Phone</span></td>
					<td>:<input type="number" name="phone" size="6" value="<?php echo $phone;?>"placeholder="code"> -
                    <input type="number" name="phone" value="<?php echo $phone;?>"placeholder="Number">
					<span><?php echo $err_phone;?></span></td><br>
				</tr>
                <tr>
				    <td><span>Address</span></td>
					<td>:<input type="text" name="address" value="<?php echo $address;?>"placeholder="Street Adress"><br>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="city" placeholder="City" size="6">-<input type="text" name="state" size="6" placeholder="State"><br>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <input type="number" name="Post" placeholder="Postal/Zip Code"><br>
                </tr>
                <tr>
				<td><span>Birth Date</span></td>
				<td>:</td>
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				</tr>

				<tr>
					<td><span><br>Gender</span></td>
					<td>:<input type="radio" value="<?php echo $gender;?>" name="gender">Male<input type="radio" value="<?php echo $gender;?>" name="gender">Female
					<span><?php echo $err_gender;?></span></td><br>
				</tr>
				<tr>
					<td><span>Where did you hear about us</span></td>
					    <td>:<br><input type="checkbox" name="Where[]" value="A Friend or Colleague"><span>A Friend or Colleague</span><br>
					    <input type="checkbox" name="Where[]" value="Google"><span>Google</span><br>
						<input type="checkbox" name="Where[]" value="Blog Post"><span>Blog Post</span><br>
                        <input type="checkbox" name="Where[]" value="News Article"><span>News Article</span>
						<span><?php echo $err_where;?></span></td><br>
				</tr>
				<tr>
					<td><span>Bio</span></td>
					<td>:<input type="text" name="bio" value="<?php echo $bio;?>"placeholder="Bio">
					<span><?php echo $err_bio;?></span></td><br>
				</tr>
				</table>
				<br>
				<tr>
					<td><input type="Submit" name="Register" value="Register"></td>
				</tr>
				
			</table>
			 
		</form>
	</body>
</html>
