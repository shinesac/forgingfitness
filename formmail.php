<?php
    if(isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $preferredcontact=$_POST['preferredcontact'];
        $program=$_POST['program'];
        $comments=$_POST['comments'];

        $to='kieowebsolutions@gmail.com';
        $subject='Form Submission';
        $message="FirstName: ".$firstname."\n"."LastName: ".$lastName."\n"."Phone: ".$phone."\n"."Email: ".$email."\n"."PrefferedContact: ".$preferredcontact."\n"."Program: ".$program."\n". "Submitted the following: "."\n\n".$comments;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo"<h1> Sent Successfully!</h1>";
            echo $_POST["firstname"];
            echo $_POST["lastName"];
            echo $_POST["email"];
            echo $_POST["phone"];
            echo $_POST["preferredcontact"];
            echo $_POST["comments"];
        } else {
            echo "Something went wrong! Please try again.";
        }
    }
    ?> 



