<?php
$servername = "server220.web-hosting.com";
$username = "ohkyuxko";
$password = "O@sis011";
$dbname = "ohkyuxko_MARKETING";

// Get email
$email = $_POST['email'];
// Check for valid email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Setup message
    $msg = "You have recieved a new email subscriber: \n$email";
    $msg = wordwrap($msg,70);
    // Send email
    mail("info@ohkyart.com","New Email Subscriber",$msg);
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO SUBSCRIBER (EMAIL)
    VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>