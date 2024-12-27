
<?php
include_once('./adhead.php');
	$servername = "localhost";
	$database = "mhmsdb";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$database);
    // Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	// write sql query for inserting data into users table.	
	$sql = "SELECT * FROM tblmaid";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {?>
    			
	<table border='2px' cellspacing='0'  class='table' width='80%'>

		<tr>
		 <td>ID NO.</td>
		 <td>name</td>
         <td>category</td>
		 <td>email</td>
         <td>phoneNumber</td>
         <td>Date of Birth</td>
         <td>Gender</td>
         <td>Experience</td>
		 <td>Image</td>
		 <td>Action</td>
		 </tr>
	<?php $k = 1;
	while($row = $result->fetch_assoc()) { ?>
	
		<tr>
		 <td><?php echo $k++;?></td>
		 <td><?php echo $row['fullname'];?></td>
         <td><?php echo $row['category'];?></td>
		 <td><?php echo $row['email'];?></td>
         <td><?php echo $row['phoneNumber'];?></td>
         <td><?php echo $row['dob'];?></td>
         <td><?php echo $row['gender'];?></td>
         <td><?php echo $row['ex'];?></td>
		<td style="padding:0px 2px;"><img src="<?=$row['image'] ?>" alt="Image" height="100px" width="100px"></td>

		 
		 <td style="font-size:18px;"><p style="display:flex;"><a href="editpr.php?id=<?=$row['id']?>" class="edit" >Edit</a>&nbsp;
        <a href="delete.php?id=<?=$row['id']?>" class="delete" style="color:white;background:red;" onclick="return confirm('Are you sure want to delete this record !')">Delete</a></p></td>

		 
		 </tr>
		 
	<?php }
	
	echo "<table/>";
	
	}
?>
