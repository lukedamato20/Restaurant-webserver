<?php

if(isset($_Post['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    
    $mailTo = "emailhere";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from ".$name . " . \n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: cmain.php?mailsend");

}

echo "Sent to email";
echo "<br>";
echo $_POST['message'];
echo "<br>";
echo $_POST['subject'];
echo "<br>";
echo $_POST['mail'];
echo "<br>";
echo $_POST['name'];
echo "<br>";
?>

 

