<html>
    <head></head>
    <body>
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
				if(empty($_POST["pass"])){
					$err_password="Password  is Required in this field";
				}
				elseif(strpos($_POST["pass"]," "))
		        {
					$err_password="Password should not contain any space";
				}
				else{
					$password=$_POST["pass"];
				}
                if(empty($_POST["pass"])){
					$err_conpass="Password  is Required in this field";
				}
				elseif(strpos($_POST["conpass"]," "))
		        {
					$err_password="Password should not contain any space";
				}
				else{
					$password=$_POST["pass"];
				}
                if(empty($_POST["email"])){
					$err_email="Mail address required";
				}
				else{
					$bio=$_POST["email"];
				}
				if (!isset($_POST["Gender"])){
                    $err_Gender= "Select a gender  ";
                }
				else{
					if (isset($Gender) && $Gender=="Male"){
						$Gender=$_POST["Gender"];
					}
					else{
						if (isset($Gender) && $Gender=="Female"){
							$Gender=$_POST["Gender"];
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
     <form action="" method="post">
     <fieldset>
     <legend><b>Club Member Regestration</b></legend>
		<form action="" method="post"
			<table>
                <tr>
                <td><span>Name</span></td>
                <td>:<input type="text" name="name" value="<?php echo $Name;?>"placeholder="Name">
                <span><?php echo $err_name;?></span></td><br>
				<tr>
					<td><span>Username</span></td>
					<td>:<input type="text" name="uname" value="<?php echo $Username;?>"placeholder="Username">
					<span><?php echo $err_uname;?></span></td><br>
				</tr>
				<tr>
				    <td><span>Password</span></td>
					<td>:<input type="Password" name="password" value="<?php echo $Password;?>"placeholder="Password">
					<span><?php echo $err_password;?></span></td><br>
				</tr>
                <tr>
				    <td><span>Confirm Password</span></td>
					<td>:<input type="Password" name="conpas" value="<?php echo $password;?>"placeholder="Confirm Password">
					<span><?php echo $err_conpass;?></span></td><br>
				</tr>
                <tr>
				    <td><span>Email</span></td>
					<td>:<input type="text" name="email" value="<?php echo $Email;?>"placeholder="Mail">
					<span><?php echo $err_email;?></span></td><br>
				</tr>
                <tr>
				    <td><span>Phone</span></td>
					<td>:<input type="number" name="phone" value="<?php echo $phone;?>"placeholder="code"> -
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
                    <td><input type="text" name="city" placeholder="City" size="6">-<input type="text" name=state placeholder="State"><br>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <input type="number" name="Post" placeholder="Postal/Zip Code"><br>
                </tr>
               
                <tr>
				    <td><span>Birth Date</span></td>
					<td>:</td>
                    <td><select name-"day">
                        <option disabled selected>Day</option>
                        <?php
                            for($a=1;$a<=31;$a++)
                            {
                                echo"<option>$a</option>";
                            }
                        ?>
                    </td>
                </tr>

				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="<?php echo $Gender;?>" name="gender">Male<input type="radio" value="<?php echo $Gender;?>" name="gender">Female
					<span><?php echo $err_gender;?></span></td><br>
				</tr>
				<tr>
					<td><span>Where did you hear about us</span></td>
					<td>:<input type="checkbox" name="Where[]" value="A Friend or Colleague"><span>A Friend or Colleague</span><br>
					    <input type="checkbox" name="Where[]" value="Google"><span>Google</span><br>
						<input type="checkbox" name="Where[]" value="Blog Post"><span>Blog Post</span><br>
                        <input type="checkbox" name="Where[]" value="News Article"><span>News Article</span>
						<span><?php echo $err_where;?></span></td><br>
				</tr>
				<tr>
					<td><span>Bio</span></td>
					<td>:<input type="text" name="bio" value="<?php echo $Bio;?>"placeholder="Bio">
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
