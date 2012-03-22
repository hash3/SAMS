<?php
// Use session variable on this page. This function must put on the top of page.
session_start();
////// Logout Section. Delete all session variable.
session_destroy();

////// Login Section.
$Login=$_POST['Login'];
if($Login){ // If clicked on Login button.
$username=$_POST['username'];
$password=$_POST['password']; 

// Connect database. 
$host="localhost"; // Host name.
$db_user="root"; // MySQL username.
$db_password=""; // MySQL password.
$database="hash3"; // Database name.
$tblname="users"; // Table name
$con=mysql_connect($host,$db_user,$db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else {
mysql_select_db($database);
}

// Check matching of username and password.
$result=mysql_query("select * from $tblname where UserID='$username' and Password='$password'", $con);
if(mysql_num_rows($result)!='0'){ // If match.
session_register("username"); // Create session username.
header("location:mainPage.php"); // Re-direct to mainPage.php
exit;
}else{ // If not match.
}
} // End Login authorize check.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Check Login</title>
	<meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />
	<link rel="stylesheet" href="CSS/StyleSheet.css" />   
    <link rel="icon"  type="image/png"  href="Images/favicon.ico">
    <meta http-equiv="refresh" content="3; URL=index.html">
</head>

<body>
<img src="Images/Error.png" width="300" height="338" style="float:left" />
<p>There was a problem with your username or password</p>
<p>Redirecting.....</p>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
</body>
</html>
