<?php
	include 'navbar.php';
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.bg1{
background: url(bg.jpg) no-repeat center center/cover;
  background-attachment:fixed; 
  background-size:auto*1.5rem auto; 
}
#A1
{	animation-name:exp;
	animation-iteration-count:infinite;
	animation-duration:20s; 
	animation-timing-function:linear;
}
@keyframes exp
{
	0%{color:rgba(0,0,0,0); margin-right:-50px; }
	10%{color:rgba(255,255,255,1); margin-right:0px; }
	100%{color:rgba(255,255,255,1); margin-right:0px; }
}
	</style>
</head>

<body>
	
    <div class="" style="padding-top:;" >
    	<div class="bg1" style="height: 40em; width: 100%; ">
    		
  <div class="container">
               <br/>
               <br/>
               <br/>
               
                <h1 id='A1'>WELCOME USER</h1>
                <br/>
                
               <br/>
               <div class="form-group" style="width:40%;">
  <label for="sel1" style="font-family:bold; color: white;">Select category:</label>

	<?php
	$sql="SELECT TABLE_NAME FROM information_schema.tables 
	WHERE table_schema = 'stock' AND TABLE_NAME NOT LIKE 'users'";
	$result=mysqli_query($conn,$sql);
	?>

  <select class="form-control" id="type" name="category">
  	<option value="" disabled selected>Category</option>
  	<?php
	if(mysqli_num_rows($result)>0){
		while($row= mysqli_fetch_row($result)){
			?>
    <option value=<?php $row[0]?>><?php echo $row[0];?></option>
    	<?php }?>
    
  </select>	<?php }?>
</div>
  <div class="form-group" style="width:40%;">
  <label for="sel1" style="font-family:bold; color: white;">Select subcategory:</label>

	

  <select class="form-control" id="size" name="category">
  	<option value="" disabled selected>Sub-Category</option>
  	    
  </select>	
</div><div class="container">
 <a class="btn btn-outline-light btn-lg" style=" " href="#" title="view">View</a>
 <a class="btn btn-outline-light btn-lg" style="margin-left: 1em;" href="" title="import">Import/Export</a> <a class="btn btn-outline-light btn-lg" style="margin-left: 1em;" href="#" title="Delete">Delete</a>
               
</div></div>

    	</div>
    </div>
</body>
</html>