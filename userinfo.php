<?php
$con=mysqli_connect('localhost','root');
if($con){
	echo"connection successfull";
}else{
echo "No connection";
}
mysqli_select_db($con,'aathi');

$username=$_POST['user'];
$email=$_POST['email'];
$phoneno=$_POST['mobile'];
 
 $query="insert into aathiuserinfo(username, email,phoneno)
 values('$username','$email','$phoneno')";
echo "$query";
mysqli_query($con,$query);

?> 