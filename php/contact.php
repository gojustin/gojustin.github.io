<?php
    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $to = "webdev@aggtedeck.com";

        $header = "From: $email \r\n";
        $header .= "Cc: $to \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $name = $_POST['name'];
        $phone = $_POST['phoneNumber'];
        $company = $_POST['cName'];
        $message = "Email: $email" . "<br>";
        $message .= "Name: $name" . "<br>";
        $message .= "Company name: $company" . "<br>";
        $message .= "Phone number: $phone" . "<br>". "<br>";
        $message .= "Message: " . $_POST['message'] . "<br>";
        
        $subject = "New Inquiry from $name";
        $send = mail($to,$subject,$message,$header);
        if($send == true) {
            echo "Email sent!"; 
            echo "<script>
                setTimeout(function(){
                window.location.href = 'index.php';
             }, 3000);
            </script>";
        }
        else {
            echo "Not Sent!";
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        }
    }
    else {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
?>