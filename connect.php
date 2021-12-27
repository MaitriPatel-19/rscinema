<?php 
//echo "we are on footer page..";

    $name = $_REQUEST['contact-name'];
    $mailForm = $_REQUEST['contact-email'];
    $phone = $_REQUEST['contact-phone'];
    $message = $_REQUEST['contact-message'];
   


    $mailTo = "pranavgoswami38@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "You Have Receive New Mail.\n Name : ".$name.
    ".\n Email : ".$mailForm. 
    ".\n Phone : ".$phone.
    ".\n Message : ".$message;  
    

    mail($mailTo,"New inquiry from: $name", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$name. " \n We contact You soon...";
  
   
   
   mail($mailForm,"Thank you very much . ",$body,"From:noreply@patelelec.eu")

?>




<script language="javascript">
    window.open("index.html","_self");
</script>