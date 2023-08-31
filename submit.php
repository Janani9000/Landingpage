<?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $recipient = "jananicharala1@gmail.com"; // Change this to your email address
    $subject = "New Contact Form Submission";
    $mailheaders = "From:" .$name."<".$email.">"\r\n;
    
   
    
    (mail($recipient, $subject, $message, $mailheaders)) 

        or die("Error");

    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Product Landing Page</title>
</head>
<body>
    
  <div class="container">
    <div class="wrapper">
        <div class="navbar">
            <div class="logo"></div>
            <ul class="navlist">
                <li><a hraf="#">Home</a></li>
                <li><a hraf="#">Order</a></li>
                <li><a hraf="#">Product</a></li>
                <li><a hraf="#">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="hero">
            <img src="images/products.jpg"alt="">
            <div class="content">
            <h1>Thanks you for submitting  </h1>
            <p class ="back"> go to <a href="index.html">Home page</a></p>
            </div>
                
        </div>
    </div>
  </div>
</body>
</html>

    ';
       

?>
