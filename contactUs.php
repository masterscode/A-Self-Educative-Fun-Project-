<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <meta name="keyword" content="">
    <title>Hans Oil and Gas Industry | Contact Us</title>
    <style>
        body .jumbotron{
            background-color: ivory;
            text-shadow: 1px 1px 1px grey;
            text-transform: capitalize;
        }
        small{ text-shadow:none; text-transform: none;}
    </style>
</head>
<body>
    <div class="jumbotron-fluid jumbotron">
        <div class="container-fluid">
            <p class="lead">Peter Hans Oil and Gas</p>
            <div class="display-4">
                Thank you for Reaching Us!
            </div>
            <small class="center">To go back click <a href = 'index.html'>here</a></small>
        </div>
    </div>
    
    <div class="container">
        
        <?php
        // include_once 'PHPMailer/PHPMailer.php';
        // include_once 'PHPMailer/Exception.php';

        // use PHPMailer\PHPMailer\PHPMailer;

        $check = empty($_POST) ? header("location:index.html") : true;
        $senderName = addslashes ($_POST['senderName']);
        $senderEmail = addslashes ($_POST['senderEmail']);
        $subject = addslashes ($_POST['subject']);
        $message = addslashes (nl2br($_POST['message']));
        $receipient = 'petergregory04@gmail.com';
        $alertSuccess = "Your Message was Sent Successfully!";
        $alertFailure = "There Was a Problem in Sending Your Message";

        if(mail($receipient, $subject, $message, $senderEmail)){
            echo "<div class='alert alert-success'>".$alertSuccess."</div>";
        }else{
            echo "<div class='alert alert-warning'>".$alertFailure."</div>";
        }

        ?>
    </div>
    
        <footer>
        <div class="container"> 
            <p align='center'>&copy; Hans Oil and Gas Industry </p>
        </div>
       </footer>
    

       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>

    