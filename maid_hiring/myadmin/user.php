<?php
include_once('./adhead.php');

$sql="SELECT* FROM reg";
$conn=mysqli_connect('localhost','root','','mhmsdb');
$result=mysqli_query($conn,$sql);
echo "<table border='2px' cellspacing='0' class='table' width='80%'>";
echo "<tr><th>Name</th><th>Email</th><th>Password</th><th>Action</th><tr/>";
while($row=mysqli_fetch_assoc($result)){
    ?>
     <!-- echo "<tr><td>{$row['full_name']}</td><td>{$row['phone_number']}</td><td>{$row['email']}</td><td>{$row['gender']}</td><td><a href='delete.php?id={$row['sl']}'>Delete</a></td><tr/>"; -->
     <tr>
        <td><?=$row['username'] ?></td>
        <td><?=$row['email'] ?></td>
        
        <td><?=$row['password'] ?></td>
        <td><a href="userdelete.php?id=<?=$row['id']?>" onclick="return confirm('Are you sure want to delete ?')">Delete</a></td>
      

     </tr>
     
<?php
 
    
}
echo "</table><br>";
?>
