<?php
include('includes/db.php');
if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) 
&& ($_GET["action"]=="reset") && !isset($_POST["action"])){
  $key = $_GET["key"];
  $email = $_GET["email"];
  $curDate = date("Y-m-d H:i:s");
  $query = mysqli_query($con,
  "SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';"
  );
  $row = mysqli_num_rows($query);
  if ($row==""){
  $error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link
from the email, or you have already used the key in which case it is 
deactivated.</p> 
<p><a href="http://192.168.143.60/latest/Minor/Minor/client-forgot-password.php">
Click here</a> to reset password.</p>';
	}else{
  $row = mysqli_fetch_assoc($query);
  $expDate = $row['expDate'];
  if ($expDate >= $curDate){
  ?>
  <br />
  <form method="post" action="" name="update" class="border p-3">
    <input type="hidden" name="action" value="update" />

    <div class="form-group">
      <label><strong>Enter New Password:</strong></label>
      <input type="password" name="pass1" maxlength="15" class="form-control" required />
    </div>

    <div class="form-group">
      <label><strong>Re-Enter New Password:</strong></label>
      <input type="password" name="pass2" maxlength="15" class="form-control" required/>
    </div>

    <input type="hidden" name="email" value="<?php echo $email;?>"/>

    <div class="form-group">
      <input type="submit" value="Reset Password" class="btn btn-primary" />
    </div>
  </form>
<?php
}else{
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which 
as valid only 24 hours (1 days after request).<br /><br /></p>";
            }
      }
if($error!=""){
  echo "<div class='error'>".$error."</div><br />";
  }			
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) &&
 ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
$error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
  }
  if($error!=""){
echo "<div class='error'>".$error."</div><br />";
}else{
$pass1 = password_hash($pass1, PASSWORD_BCRYPT);
mysqli_query($con,
"UPDATE `client` SET `client_password`='".$pass1."' WHERE `client_email`='".$email."';"
);

mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");
	
echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="">
Click here</a> to Login.</p></div><br />';
	  }		
}
?>