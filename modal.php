<?php 
//echo "we are on footer page..";

    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $screen = $_REQUEST['screen'];
    $seatno = $_REQUEST['seatno'];
  
   
    


    $mailTo = "keryaritsolutions@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "You Have Receive New Mail.\n F_Name : ".$name. 
    ".\n Phone : ".$phone.
    ".\n Email : ".$email.
    ".\n screen : ".$screen.  
    ".\n Seatno : ".$seatno;
    

    mail($mailTo,"New inquiry from: $name", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$name. " \n We contact You soon...";
  
   
   
   mail($mailForm,"Thank you very much . ",$body,"From:noreply@patelelec.eu")

?>




<script language="javascript">
    window.open("index.html","_self");
</script>