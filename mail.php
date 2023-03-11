<?php
include "includes/db_connection.php";
$name = $_POST["name"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$msg_subject = $_POST["msg_subject"];
$message = $_POST["message"];

$EmailTo = "info@esolacetech.com";
$Subject = "$name";

$sql = "SELECT * FROM info WHERE email='$email'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $EmailTo = $row['email'];
}

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields .= "Email: ";
$Fields .= $email;
$Fields .= "\n";

$Fields .= "phone Number: ";
$Fields .= $phone_number;
$Fields .= "\n";

$Fields .= "Subject: ";
$Fields .= $msg_subject;
$Fields .= "\n";

$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Fields, "From:" . $email);

echo "<meta http-equiv='refresh' content='1; url=https://esolacetech.com/Thanks.php'>";