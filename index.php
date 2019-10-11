<?php
$firstname = $name = $gender = $country = $email = $subject =$comments = "";
$errName = $errFirsname = $errGender = $errCountry = $errEmail = $errSubject = $errcomments = "";

$name = $_POST['name'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$country=$_POST['country'];
$subject=$_POST['subject'];
$comments=$_POST['comments'];

if ($_SERVER['REQUEST_METHOD']=="POST"){
    // FIRSTNAME VARIABLE
    if(empty(trim($_POST['firstname']) )){
        $errFirstname = "- Firstname is empty -";
    } else {
        $firstname = htmlspecialchars(strip_tags($_POST['firstname']));
    }
}
?>	




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/hackers-poulette-logo.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d5cf1c6489.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>HackersPoulette</title>
</head>
<body>
    <header>
    <?php
    include 'header.php';
    ?>
    </header>
    <main>
    <?php
    include 'form.php';
    ?>
    </main>
    <footer>

    </footer>

 
</body>
</html>