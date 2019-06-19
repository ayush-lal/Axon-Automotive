<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
//if (empty($_POST["message"])) {
//    $errorMSG .= "Message is required ";
//} else {
//    $message = $_POST["message"];
//}

// WEIGHT
if (empty($_POST["weight"])) {
    $errorMSG .= "Weight is required ";
} else {
    $weight = $_POST["weight"];
}

// AGE
if (empty($_POST["age"])) {
    $errorMSG .= "Age is required ";
} else {
    $age = $_POST["age"];
}

// DOB
if (empty($_POST["dob"])) {
    $errorMSG .= "Date of Birth is required ";
} else {
    $dob = $_POST["dob"];
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Phone is required ";
} else {
    $phone = $_POST["phone"];
}

// PG NAME
if (empty($_POST["pgname"])) {
    $errorMSG .= "pgname is required ";
} else {
    $pgname = $_POST["pgname"];
}

// CLUB
if (empty($_POST["club"])) {
    $errorMSG .= "Club name is required ";
} else {
    $club = $_POST["club"];
}

// GENDER SELECT
if (empty($_POST["gender"])) {
    $errorMSG .= "Please Select an Option ";
} else {
    $gender = $_POST["gender"];
}

// FUN ACTIVITIES=========================================================
if (empty($_POST["funactiv"])) {
    $errorMSG .= "Please Select an Option ";
} else {
    $funactiv = $_POST["funactiv"];
}



$EmailTo = "alal28@eq.edu.au";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
//$Body .= "Message: ";
//$Body .= $message;
//$Body .= "\n";
$Body .= "Weight: ";
$Body .= $weight;
$Body .= "\n";
$Body .= "Age: ";
$Body .= $age;
$Body .= "\n";
$Body .= "DOB: ";
$Body .= $dob;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "pgname: ";
$Body .= $pgname;
$Body .= "\n";
$Body .= "club: ";
$Body .= $club;
$Body .= "\n";
$Body .= "gender: ";
$Body .= $gender;
$Body .= "\n";
$Body .= "funactiv: ";
$Body .= $funactiv;

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>