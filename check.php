<?php
include "db.php";
if (isset($_POST['email'])) {
   $Name = $_POST['email'];
   $Query = "SELECT email_id FROM mailid WHERE email_id='".$Name."'";
   $ExecQuery = mysqli_query($con, $Query);
   if (mysqli_num_rows($ExecQuery)>0) {
   echo "<p style='color:red;'>Mail_id already present</p>";} ?>
   <?php
}
?>
