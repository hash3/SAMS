<?php
// You may copy this PHP section to the top of file which needs to access after login.
session_start(); // Use session variable on this page. This function must put on the top of page.
if(!session_is_registered("username")){ // if session variable "username" does not exist.
header("location:index.html"); // Re-direct to index.php
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Page</title>
<link rel="stylesheet" href="CSS/StyleSheet.css" />
</head>

<body>
<h1>Student Page</h1>

<p>Hello <? echo $_SESSION['username']; ?>! You are now Logged in.</p>
<p>What did you want to do today?</p>
<div align="left">
  <table height="122" border="1" cellpadding="5" cellspacing="5" style="border:thin, #000, solid">
    <tr>
      <td width="180"><p>Upload a file?</p></td>
      <td width="180"><p>Evaluate your peers</p></td>
      <td width="180" align="left"><p>Review your marks</p></td>
    </tr>
    <tr>
      <td align="center"><a href="upload_file.php"><img src="Images/file.jpeg" width="50" height="50" border="1"></a></td>
      <td align="center"><a href="evaluate_peers.php"><img src="Images/peer.jpeg" width="48" height="48" border="1"></a></td>
      <td align="center"><a href="view_marks.php"><img src="Images/grade.jpeg" width="38" height="37" border="1"></a></td>
    </tr>
  </table>
</div>
<p><a href="index.php">Logout</a></p>
</body>
</html>