<?php
$message_sent=false;

   if(isset($_POST['email'])&&$_POST['email']!=''){
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){


   
// submit the form
$userName=$_POST['nom'];
$userEmail=$_POST['email'];
$tel=$_POST['tels'];
$epse=$_POST['tels'];
$message=$_POST['message'];
$to="blah@blah.com";
$body="";
$body="From:".$userName."\r\n";
$body.="Email:".$userEmail."\r\n";
$body="Message:".$message."\r\n";
// mail($to,$messageSubject,$body);
$message_sent=true;
    } 
}
else
$invalid_class_name = "form-invalid"

?>


<?php
if($message_sent):
?>
   <h3>Thanks,we'll be in touch</h3>
<?php
else:
?>

<?php
endif;
?>