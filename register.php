<!DOCTYPE html>


<?php 
		session_start();
       if (isset($_POST['register']))
        {
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sunny";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


		$name = mysql_real_escape_string($_POST['name']);
                $email = mysql_real_escape_string($_POST['email']);
		$psw = mysql_real_escape_string($_POST['pwd']);
		$pswrepeat = mysql_real_escape_string($_POST['pwd2']);
			$address = mysql_real_escape_string($_POST['address']);
		$organ = $_POST['org'];
		$bg = $_POST['blood'];
                $age = mysql_real_escape_string($_POST['age']);
                
				$phone = mysql_real_escape_string($_POST['phone']);
				$age = mysql_real_escape_string($_POST['age']);
				$gender = mysql_real_escape_string($_POST['gender']);
				
		if($psw == $pswrepeat){$sql = "INSERT INTO organ(name,email, password,phone,gender,age,organ,address,bloodgroup) VALUES('$name', '$email', '$psw', '$phone', '$gender','$age','$organ','$address','$bg')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 header("Location: index.html");
		}	
		else {
			  echo "Password not Matched";
		}
		
 


$conn->close();
      
		
		
		// $name = mysql_real_escape_string($_POST['name']);
                // $email = mysql_real_escape_string($_POST['email']);
		// $psw = mysql_real_escape_string($_POST['pwd']);
		// $pswrepeat = mysql_real_escape_string($_POST['pwd2']);
		// $organ = $_POST['org'];
                // $age = mysql_real_escape_string($_POST['age']);
                
				// $phone = mysql_real_escape_string($_POST['phone']);
				// $age = mysql_real_escape_string($_POST['age']);
				// $gender = mysql_real_escape_string($_POST['gender']);
				

				
				
				
		// if(strcmp($psw,$pswrepeat)){
				// echo 'password matched';
		// }                
		// else
		// {echo 'password NOT matched';
		// }
		
		// if ($password == $pswrepeat) {
			// $sql = "INSERT INTO organ(name,email, password,phone,gender,age,organ) VALUES('$name', '$email', '$psw', '$phone', '$gender','$age','$organ')";
			// mysqli_query($db, $sql);
			
			 // echo 'Successfully registered';
			// header("location: index.php"); //redirect to home page
		// }else{
			
			// echo 'Error while updating';
		
		// }
	}

?>

<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Donor Register Form</h2>
  <form class="form-horizontal" method="post" action="register.php">
   <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control" id="name" placeholder="Enter Name" name="name"required>
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd"required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd2" placeholder="Confirm password" name="pwd2"required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="address">Address:</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control" id="address" placeholder="address" name="address"required>
      </div>
	  </div>
	  
	 <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone"required>
      </div>
    </div>
	
	 <div class="form-group">
     <label class="control-label col-sm-2" >Gender:</label>
   
          <div  class="control-label col-sm-2"> 
	  
          	<select id="gender" name="gender">       
	
  <option value="0">--Select Gender--</option>
  <option value="male">MALE</option>
  <option value="female">FEMALE</option>
  </select>

      </div>
    </div>
  
  
  
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Age:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="age" placeholder="Enter Age" name="age"required>
      </div>
    </div>
	
	
	   <div class="form-group">
   <label class="control-label col-sm-2" >BloodGroup:</label>
   
          <div  class="control-label col-sm-2"> 
	  
          	<select id="blood" name="blood">       
	
  <option value="0">--Select Blood Group--</option>
  <option value="a+">A+</option>
  <option value="a-">A-</option>
  <option value="b+">B+</option>
   <option value="b-">B-</option>
    <option value="ab+">AB+</option>
	 <option value="ab-">AB-</option>
	  <option value="o+">O+</option>
	  	  <option value="o-">O-</option>

	  
	
</select>

      </div>
    </div>
	

   <div class="form-group">
   <label class="control-label col-sm-2" >Organ:</label>  
   
          <div class="control-label col-sm-2"> 
	  
          	<select id="org" name="org">       
	
  <option value="0">--Select Organ--</option>
  <option value="hesrt">HEART</option>
  <option value="lungs">LUNGS</option>
  <option value="kidney">KIDNEY</option>
   <option value="psncreas">PANCREAS</option>
    <option value="intestine">INTESTINE</option>
	 <option value="liver">LIVER</option>
	  <option value="small bowel">SMALL BOWEL</option>
	  
	
</select>

      </div>
    </div>

	
	
	<div class="row">
	

	<div class="form-group" style="margin-left:200px;">
	<input type="checkbox" required name="organ donation" id="organ donation" value="Yes" style="position:relative; top:3px;margin-right:5px;">
	<label class="contact_form_label">I hereby pledge to donate my organ.</label> 
	
	</div>
	
	</div>
	
	
  

  
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          
 <button type="submit" name="register" class="signupbtn btn btn-default">Register</button>
	</div>
    </div>
  </form>
</div>



</body>
</html>


