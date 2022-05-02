<?php 
//echo "we are on footer page..";

    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $mname = $_REQUEST['mname']
    $ticket = $_REQUEST['ticket']
    $date = $_REQUEST['date']
    $occasion = $_REQUEST['occasion']



    $mailTo = "keryaritsolutions@gmail.com";
    $headers = "From: ".$mailFrom;
    
   
    $txt = "You Have Receive New Mail.\n F_Name : ".$fname. ".\n L_Name : ".$lname. 
    ".\n Email : ".$email. 
    ".\n Phone : ".$phone.
    ".\n Moviename :".$mname.
    ".\n NO. Of Tickets :".$ticket.
    ".\n Date :".$date.
    ".\n Occasion :".$occasion;

    mail($mailTo,"New inquiry from: $name", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$name. " \n We contact You soon...";
  
   
   
   mail($email,"Thank you very much . ",$body,"From:noreply@patelelec.eu")

?>




<script language="javascript">
    window.open("index.html","_self");
</script>