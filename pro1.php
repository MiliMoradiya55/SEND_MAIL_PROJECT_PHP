<html>
<head>
<style>
body{
background-image: url("project.jpg");
background-repeat: no-repeat;
background-size:100%;
}
table,tr,td{
padding: 1%;
background: #AFEEEE;;
margin: auto;
width: 1000px;
font-size: 20px;
border: 1px solid white;
border-collapse: collapse;
margin-top: 80px;
text-align: center;
}
tr,td,th{
background-color: #96D4D4;
border:3px solid white ;
}
th{
text-align: center;
font-size:25px;
height:5px;
width:10px;
}
.button {
background-color: #f50202;
border: none;
color: white;
padding: 10px 20px;
text-align: center;
font-size: 25px;
cursor: pointer;
}
</style>
</head>
<?php

$host="localhost:3306";
$user="root";
$pass="1234";
$dbname="table";
$conn= mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
{
die("could not connect:".mysqli_error());
}
echo "<table>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Sender_email</th>";
echo "<th>Receiver_email</th>";
echo "<th>Contact no</th>";
echo "<th>Subject</th>";
echo "<th>Message</th>";
$display=mysqli_query($conn,"select * from email");
while($row = mysqli_fetch_array($display))
{
$id=$row['id'];
$name=$row['name'];
$s_email=$row['sender_email'];
$r_email=$row['receiver_email'];
$phone=$row['phone'];
$subject=$row['subject'];
$message=$row['message'];
echo "<tr>
<td>$id</td>
<td>$name</td>
<td>$s_email</td>
<td>$r_email</td>
<td>$phone</td>
<td>$subject</td>
<td>$message</td>
</tr>";
}
echo '<tr><td colspan="7"><form action="pr.php" >';
echo '<input type="submit" value="Go to Home" class="button"></td></tr>';
echo "<table>";
?>
</html>