<?php
include_once('./adhead.php');

$sql="SELECT* FROM tblmaidbooking";
$conn=mysqli_connect('localhost','root','','mhmsdb');
$result=mysqli_query($conn,$sql);
echo "<table border='2px' cellspacing='0' class='table' width='80%'>";
echo "<tr><th>Name</th><th>Contact</th><th>Email</th><th>Address</th><th>Gender</th><th>Service</th><th>Work Shift from</th><th>work shift to</th><th>Start date</th><th>Notes</th><tr/>";
while($row=mysqli_fetch_assoc($result)){
    ?>
     <!-- echo "<tr><td>{$row['full_name']}</td><td>{$row['phone_number']}</td><td>{$row['email']}</td><td>{$row['gender']}</td><td><a href='delete.php?id={$row['sl']}'>Delete</a></td><tr/>"; -->
     <tr>
        <td><?=$row['fname'] ?></td>
        <td><?=$row['number'] ?></td>
        
        <td><?=$row['email'] ?></td>
        <td><?=$row['address'] ?></td>
        <td><?=$row['gender'] ?></td>
        <td><?=$row['category'] ?></td>
        <td><?=$row['WorkingShiftFrom'] ?></td>
        <td><?=$row['WorkingShiftTo'] ?></td>
        <td><?=$row['startdate'] ?></td>
        <td><?=$row['notes'] ?></td>
        
     </tr>
<?php
    
}
echo "</table><br>";
?>
