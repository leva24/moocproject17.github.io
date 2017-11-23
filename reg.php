<?php
include('connection.php');
//$con=mysqli_connect("localhost","16lemca026","10","16lemca026");
$fname=$_POST["txtname1"];
$lname=$_POST["txtlname1"];
$email=$_POST["txtemail1"];
$password=$_POST["txtpassword1"];
$mob=$_POST["txtmobile1"];
//$s_qn=$_POST["secquestion1"];
//$s_ans=$_POST["txtans"];


$usql="select username from login where username='$email'";
 $res=mysqli_query($con,$usql);

$num=mysqli_num_rows($res);

if($num>0)
{
	?>
	<script>window.alert('Username already taken');
	location.href="register.php";
	</script>
    <?php
}
else
{

$sql_login="INSERT INTO login(u_type,username,password)VALUES('user','$email','$password');";
//echo $sql_login;
 //$result1=mysql_query($sql_login);
 mysqli_query($con,$sql_login);
$sql_reg="INSERT INTO student(stud_fname,stud_lname,stud_email,stud_contact,stud_password)VALUES('$fname','$lname','$email','$mob','$password');";

 //$result2=mysql_query($sql_reg);
 mysqli_query($con,$sql_reg);

//if(mysqli_query)
//{
	?>
    <script>alert("Inserted Successfully");
    document.location.href='register.php';
    </script>
    <?php
//}


}

?>