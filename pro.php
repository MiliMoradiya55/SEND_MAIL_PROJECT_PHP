<html>
<head>
<style>
body
{
background-image: url("project.jpg");
background-repeat: no-repeat;
background-size:100%;
}
table,tr,td
{
padding: 1%;
background: #AFEEEE;;
margin: auto;
width: 750px;
height: 100px;
font-size: 25px;
border: 1px solid white;
border-collapse: collapse;
margin-top: 80px;
text-align: center;
}
tr,td
{
background-color: #96D4D4;
border:3px solid white ;
}
.button
{
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
<body>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer\src\Exception.php';
require 'phpmailer\src\PHPMailer.php';
require 'phpmailer\src\SMTP.php';
if(isset($_POST['send'])) {
$name=$_POST['name'];
$phone=$_POST['phone'];
$s_mail=$_POST['semail'];
$r_mail=$_POST['remail'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$password=$_POST['pass'];
echo "<table>";
if(empty($_POST['name']))
{
echo "<tr><td>Employee Name </td><td> Error! you didn't enter the name</td></tr>";
}
else if(!preg_match ("/^[a-zA-z]*$/", $name) )
{
echo "<tr><td>Name </td><td> Error! Only alphabets are allowed.</td></tr>";
}
else
{
echo "<tr><td>Name </td><td> ".$name."</td></tr>";
}
$number=("/^[0-9]*$/");
if(!preg_match($number,$phone))
{
echo "<tr><td> Contact no. </td><td> Only numeric value is allocated.</td></tr>";
}
else
{
echo "<tr><td> Contact no. </td><td>". $phone."</td></tr>";
}
$email="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
if(!preg_match($email,$s_mail))
{
echo "<tr><td>Sender Email address </td><td>Error! enter Email in
valid formate</td></tr>";
}
else
{
echo "<tr><td>Sender Email address </td><td>".$s_mail."</td></tr>";
}
$Email="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
if(!preg_match($Email,$r_mail))
{
echo "<tr><td>Receiver Email address is </td><td>Error! enter Email in valid
formate</td></tr>";
echo "<tr><td colspan='2'>Successfully Your Email not Sending </td></tr>";
echo '<tr><td colspan="2"><form action="pr.php" >';
echo '<input type="submit" value="Go to Home" class="button"></td></tr>';
}
else
{
echo "<tr><td>Receiver Email address is </td><td>".$r_mail."</td></tr>";

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $s_mail;
$mail->Password = $password;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom($r_mail);
$mail->addAddress($r_mail);
$mail->isHTML(true);
$mail->Subject = $_POST["subject"];
$mail->Body = $_POST["message"];
$mail->send();
echo "<tr><td colspan='2'>Successfully Your Email Sending </td></tr>";
echo '<tr><td colspan="2"><form action="pr.php" >';
echo '<input type="submit" value="Go to Home" class="button"></td></tr>';
}
echo "</table>";
$host="localhost:3306";
$user="root";
$pass="1234";
$dbname="table";
$conn= mysqli_connect($host,$user,$pass,$dbname);
if(!$conn)
{
die("could not connect:".mysqli_error());
}
else
{
echo "Connected Successfull!<br>";
}
$sql="create table email(name VARCHAR(10) NOT NULL,sender_email VARCHAR(20)
NOT NULL,receiver_email VARCHAR(20) NOT NULL,phone varchar(10) NOT
NULL,subject VARCHAR(20) not null,message varchar(200) NOT NULL)";
mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql))
{
echo "<br>";
}
$sql1= "INSERT INTO email(name,sender_email,receiver_email,phone,subject,message)
values('$name','$s_mail','$r_mail','$phone','$subject','$message')";
mysqli_query($conn,$sql1);
if(mysqli_query($conn,$sql1))
{
echo "<br>";
}
}
?>
</body>
</html>