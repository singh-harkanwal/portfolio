      <?PHP
      if(isset($_POST['submit']) && $_POST['phone'] == ''){
        $to = "notinservice@email.com";
        $from = $_POST['Email'];
        $name = $_POST['Name'];
        $subject = "Form submission";
        $message = $name . " wrote the following:" . "\n\n" . $_POST['Message'] . "From" . $from;

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $flag = false;    
        $flag = mail($to,$subject,$message,$headers);
        
        if($flag) {
            echo "The email has been sent, I will contact you soon."
        } else {
            echo "Opps! something happened wrong, please resubmit the form";
        }
      }
      ?>
