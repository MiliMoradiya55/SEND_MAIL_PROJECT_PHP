<!-- Code File:-pr.php -->

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
width: 750px;
font-size: 20px;
border: 1px solid white;
border-collapse: collapse;
margin-top: 80px;
text-align: center;
}
tr,td{
background-color: #96D4D4;
border:3px solid white ;
}
th{
text-align: center;
font-size:50px;
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
a{
background-color: #f50202;
border: none;
color: white;
padding: 5px 10px;
text-align: center;
font-size: 20px;
cursor: pointer;
}
</style>
</head>
<body>
<table>
<th colspan="2">Contact Form</th>
<form method="POST" action="pro.php" >
<tr><td><label>Name : </label></td>
<td><input type="text" name="name" size="40"></td></tr>
<tr><td><label>Contact no. : </label></td>
<td><input type="text" name="phone" size="40"></td></tr>
<tr><td><label>Sender Email Address : </label></td>
<td><input type="text" name="semail" size="40"></td></tr>
<tr><td><label>Sender Email Address Password : </label></td>
<td><input type="password" name="pass" size="40"></td></tr>
<tr><td><label>Receiver Email Address : </label></td>
<td><input type="text" name="remail" size="40"></td></tr>
<tr><td><label>Subject : </label></td>
<td><input type="text" name="subject" size="40"></td></tr>
<tr><td><label>Message : </label></td>
<td><textarea name="message" rows="4" cols="40"></textarea></td></tr>
<tr><td colspan="2"><input type="submit" name="send" value="send"
class="button"></td></tr>
<tr><td colspan="2">
<a href="pro1.php" style="background">View all data</a>
</td></tr>
</form>
</table>
</body>
</html>
