<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="stock";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$catname=$_POST['datapost'];	
$sql="SELECT subcat FROM $catname";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_row($result)){
								?>
								<option> <?php echo $row[0];?></option>
								<?php
									}

?>