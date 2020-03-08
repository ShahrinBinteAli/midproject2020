<?php
if(isset($_REQUEST['signup'])){
session_start();
$id=$_POST['idname'].'/';
$name=$_POST['uname'].'/';
$uemail=$_POST['uemail'].'/';
$day=$_POST['day'].'|';
$month=$_POST['month'].'|';
$year=$_POST['year'].'|';
$blood=$_POST['blood'].'/';
$password=$_POST['password'].'/';
$gender=$_POST['ugender'].'/';
$degree=$_POST['degree'];
$email=$uemail;
$elength=strlen($email);
$length=strlen($name);
$plength=strlen($password);
$birth=$day.$month.$year.'/';
$a=0;
if($id>=2 && !empty(trim($id)) && is_numeric($id)==true)
{
	$a=$a+1;
}
else
{
	echo("id can't be empty/can't start with letter/length must atleast 3<br>");
}
if($length>=2 && !empty(trim($name)) && is_numeric($name)==false)
{
	echo $name.$a=$a+1;
}
else
{
	echo("name can't be empty/can't start with nuber/length must atleast 3<br>");
}
if($plength>5)
{
	$a=$a+1;
}
else
{
       echo "password should be atleast 6<br>";
}
	
if(!empty(trim($email))&& $email[$elength-4]=='.' && strpos($email,'@')!=false)
{
	echo("email can't be empty/addess content @ <br>");
}
else
{
  $a=$a+1;
}
if(isset($_POST['ugender']))
{
	$a=$a+1;
	echo $a;
}else
{
	echo("select  gender<br>");
}
if(!empty(trim($day)) && !empty(trim($month)) && !empty(trim($year))&& $day>=0 || $day<=31 && $month>=1|| $month<=12 && $year>=1900 || $year<=2016)
{
	$a=$a+1;
      
}
else
{
	echo("use correct date<br>");
}
if(isset($_POST['degree']))
{
	$a=$a+1;
	echo $a;
}
else
{
	echo("choose degree<br>");
}
if($blood='choose')
{
	$a=$a+1;
	echo $a;
}
else
{
	echo("choose blood group<br>");
}
echo $a."</br>";
if($a>6){
	$_SESSION['id']=$id;
	$_SESSION['name']=$name;
	$_SESSION['password']=$password;
	$_SESSION['gender']=$gender;
	$_SESSION['email']=$email;
	$_SESSION['blood']=$blood;
	$_SESSION['degree']=$degree;
	$_SESSION['date']=$birth;
	header('location: submit.php');
}
}
?>