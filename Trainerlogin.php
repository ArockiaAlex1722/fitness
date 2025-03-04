<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 500%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
.container {
    width: 50%;
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1>Trainer Login</h1>
    <p>WELCOME BACK.</p>
    <hr>
      
    <label for="email"><b>UserName</b></label>
    <input type="text" placeholder="Enter Name" name="Name" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
      
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button> 
        
      <button type="submit" class="signupbtn">Login</button>
    </div>
  </div>
</form>

</body>
</html>
<?php 

include 'dbconfig.php';

if(isset($_POST['login'])){
$name=$_POST['Name'];

$pws=$_POST['psw'];
    $result=mysqli_query($conn, "select * from tbl_admin where admin_name='$name'");
    $row=mysqli_fetch_array($result);
    if(is_array($row)){
		
        echo "<script>alert('Login success');</script>";
		$_SESSION["admin_name"]=$row['admin_name'];
		
    }
    else{
        echo "<script>alert('Invalid username');</script>";
    }
}
?>