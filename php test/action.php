<?php
// echo "hello";
// print_r($_POST);
$conn=mysqli_connect('localhost','root','','phpcasestudy');
// $ip_address=$_SERVER['REMOTE_ADDR'];
// echo $ip_address;
// if($conn){
//     echo "connection successfull";
// }
$fullname=$_POST['fullName'];
$number=$_POST['number'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$ip_address=$_SERVER['REMOTE_ADDR'];
$query="INSERT INTO `contact_form`(`fullName`, `number`, `email`, `subject`, `message`,`IP_address`) VALUES ('$fullname','$number','$email','$subject','$message','$ip_address')";
$sql_query=mysqli_query($conn,$query);
if($sql_query){
    header('location:msg.php');
    // echo "data inserted succesfully";
}
// echo $fullname,$number,$email,$subject,$message;
?>