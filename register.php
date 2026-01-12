<form method="POST">
Name: <input type="text" name="name"><br>
Email: <input type="email" name="email"><br>
Password: <input type="password" name="password"><br>
<input type="submit" value="Register">
</form>

<?php
$conn = mysqli_connect("localhost","root","","crs");

if($_POST){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['password'];

  mysqli_query($conn,"INSERT INTO students VALUES('','$name','$email','$pass')");
  echo "Registered Successfully";
}
?>

