<?php
SESSION_START();

require('complaintdatabase.php');
$sql="SELECT *FROM complaints";
$mysqlresult=mysqli_query($con,$sql);
$count=mysqli_num_rows($mysqlresult);
?>

<table border="5">
<thead>
<tr>
<th>Complaint Id</th>
<th>Department</th>
<th>Room NO.</th>
<th>Type</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<?php
if($count==0)
{
echo '<tr><td colspan="4">No data to display</td></tr>';
}
else
{
while($row=mysqli_fetch_assoc($mysqlresult))
{
echo "<tr><td>{$row['cid']}</td><td>
{$row['dept']}</td><td>
{$row['room']}</td><td>
{$row['type']}</td><td>
{$row['desc']}</td>"
}
}
?>
</tbody>
</table>

   