<form method="POST">
Email: <input type="email" name="email"><br>
Password: <input type="password" name="password"><br>
<input type="submit" value="Login">
</form>

<?php
$conn = mysqli_connect("localhost","root","","crs");

if($_POST){
  $email=$_POST['email'];
  $pass=$_POST['password'];

  $q=mysqli_query($conn,"SELECT * FROM students WHERE email='$email' AND password='$pass'");
  if(mysqli_num_rows($q)>0)
    echo "Login Successful";
  else
    echo "Invalid Data";
}
?>
