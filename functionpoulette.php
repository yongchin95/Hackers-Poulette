<?php
// $errEmail = $errPass= $errName="";
// if(isset($_POST["submit"])) {

//     $email = $_POST['email'];
//     $name = $_POST['inputUsername'];
//     $firstname = $_POST['inputUserfirstname'];

//     $valid=true;
//     // Check if name has been entered
//         if(empty($_POST['inputUsername'])){
//         $errName= 'Please enter your user name';
//         $valid=false;
//         }
//     // Check if email has been entered and is valid
//         if(empty($_POST['email'])){
//         $errEmail = 'Please enter a valid email address';
//         $valid=false;
//         }
// // check if a valid password has been entered
//         if(empty($_POST['password']) || (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0)) {
//         $errPass = '<p class="errText">Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit</p>';
//         $valid=false;
//         }
// //What the function preg_match() does is that it looks for the pattern in the string of password and returns true if the pattern matches the expression else returns false. The regular expression defines the pattern the function should look for in the string. In the expression, the dot (.) is for any character. The ?= is called the positive look ahead. It says what the next character in the string should be. So the expression (?=.{8,}) is to specify that the password must have at least 8 characters. (?=.*[0-9]) is to specify that the string must have at least one numeric character.(?=.*[a-z]) specifies that the password must have at least one lowercase letter, and (?=.*[A-Z]) is for the password to have at least one uppercase letter.
//         if($valid){
//         echo "The form has been submitted";
//         }
// }
?>

<?php
// $firstname = $name = $gender = $country = $email = $subject =$comments = "";
// $errName = $errFirsname = $errGender = $errCountry = $errEmail = $errSubject = $errcomments = "";
	
//      if(isset($_POST["submit"])) {
//     $name = $_POST['name'];
//     $firstname = $_POST['firstname'];
//     $email = $_POST['email'];
//     $gender = $_POST['gender'];
//     $country=$_POST['country'];
//     $subject=$_POST['subject'];
//     $comments=$_POST['comments'];

    
//         if (!$_POST['name']) {
// 	    $errName = 'Please enter your name';
//         }
//         echo 'lolllllll';
//         if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
// 	    $errEmail = 'Please enter a valid email address';
//         }

?>	