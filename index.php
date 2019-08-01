<!DOCTYPE html>
<html>
    <head>
   <title>Email</title>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <script type="text/javascript">function fill(Value) {
   $('#email').val(Value);
   $('#display').hide();
}
$(document).ready(function() {
   $("#email").keyup(function() {
       var name = $('#email').val();
       if (name == "") {
           $("#display").html("");
       }
       else {
           $.ajax({
               type: "POST",
               url: "check.php",
               data: {
                   email: name
               },
           success: function(html) {
                   $("#display").html(html).show();
               }
           });
       }
   });
});
</script>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="POST">
        <input type="email" id="email" placeholder="email" name="email"  autocomplete="off"/>
   <button name="submit">Submit</button>
    </form>
   <div id="display"></div>
</body>
</html>
<?php 
if(isset($_POST['submit'])){
    include 'db.php';
    $emailid = $_POST['email'];
    $sql = "insert into mailid values('".$emailid."')";
    $res = mysqli_query($con, $sql);
    if($res){echo "<script type='text/javascript'>alert('Mailid stored sucessfully')</script>";}
}