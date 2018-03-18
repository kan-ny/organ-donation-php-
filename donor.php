
<html>
<head><style>

.body{
	margin-left:20%;
	margin-right:20%;
	margin-top:10%;
	padding:2%;
	border: 2px solid;

	    border-style: solid;
    border-color: #FFFF00;
	
	}
table {
    border-collapse: collapse #FFFF00;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #FFFF00}

th {
    background-color: #000000;
    color: white;
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   
</head>
<body class="body">
 <h1 align="center">Search Donor</h1>
 
<form action="donor.php" method="post" style="border:1px solid #ccc">

<div class="form-group">
     
      
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">BLOODGROUP</label>
      <div class="col-sm-10">          
       <select id="bg" name="bg">                      
  <option value="0">--Select Blood Group--</option>
  <option value="a+">A+</option>
  <option value="a-">A-</option>
  <option value="b+">B+</option>
   <option value="b-">B-</option>
    <option value="o+">O+</option>
	 <option value="o-">O-</option>
	  <option value="ab+">AB+</option>
	   <option value="ab-">AB-</option>
	
</select>
      </div>
    </div>
	
	
	
	<div class="form-group">
       <label for="bloodgroup"><b></b></label>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">ORGAN</label>
      <div class="col-sm-10">          
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
	
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Search</button>
      </div>
    </div>




      
  
</form>

<?php

if (isset($_POST['submit'])) 
        {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sunny";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$bloodgroup = $_POST['bg'];
$organ = $_POST['org'];

//$sql = "SELECT name, email, address, phone, gender, age, organ, bloodgroup FROM organ WHERE bloodgroup = 'ab-' ";
$sql = "SELECT * FROM organ WHERE organ = '$organ' and `bloodgroup` = '$bloodgroup'";
//$sql = "SELECT * FROM organ ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { echo "<table><tr><th>EMAIL</th><th>PHONE</th><th>PHONE</th><th>BLOODGROUP</th><th>AGE</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["bloodgroup"]. "</td><td>" . $row["age"] ,"<br>";
		} echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);

		}
?>

</body>
</html>