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
            // merging concating all user values inside body variable. \n is used for new line
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage: $message\n\nRegards, \n$name";
            $sender = "From: $email"; // sender email
            if(mail($receiver, $subject, $body, $sender)) { //mail() is inbuilt php function to send mail
                echo "Your message has been sent!";
            } else {
                echo "Sorry failed to send your message!";
            }
        } else {
            echo "Enter a valid email adress!";
        }
    } else {
        echo "Email and password field is required!";
    }
?>