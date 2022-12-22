<?php
    // echo "This message is sent from PHP file";

    // get all form values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    // echo $name; not working
    if(!empty($email) && !empty($message)) { // if email and message field is not empty
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) { // if user entered email is valid
            $receiver = "mgttmich@gmail.com"; // email receiver adress
            $subject = "From: $name <$email>"; // subject of the email. From: Theodoros Michos <mgttmich@gmail.com>
        } else {
            echo "Enter a valid email adress!";
        }
    } else {
        echo "Email and password field is required!";
    }
?>