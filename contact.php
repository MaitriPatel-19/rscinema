<?php 
//echo "we are on footer page..";

    $fname = $_REQUEST['contact-fname'];
    $lname = $_REQUEST['contact-lname'];
    $mailForm = $_REQUEST['contact-email'];
    $phone = $_REQUEST['contact-phone'];
    $seat = $_REQUEST['contact-seat'];
    $food = $_REQUEST['s1'];
    $quant = $_REQUEST['quantity'];


    $mailTo = "keryaritsolutions@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "You Have Receive New Mail.\n F_Name : ".$fname. ".\n L_Name : ".$lname. 
    ".\n Email : ".$mailForm. 
    ".\n Phone : ".$phone.
    ".\n Seat : ".$seat.  
    ".\n Food : ".$food. 
    ".\n Quantity : ".$quant;

    mail($mailTo,"New inquiry from: $name", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$name. " \n We contact You soon...";
  
   
   
   mail($mailForm,"Thank you very much . ",$body,"From:noreply@patelelec.eu")

?>




<script language="javascript">
    window.open("index.html","_self");
</script>