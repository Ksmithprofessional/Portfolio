<?php 

include 'db-connection.php';

$error = '';
$success = '';

if(isset($_POST['submit'])) {


    // filter input, escape output!
    $fName = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lName = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);


    try {
        $sql = "INSERT INTO contact (f_name, l_name, email_address, subject, message) VALUES (?, ?, ?, ?, ?)";
        $results = $pdo->prepare($sql);
        $results-> bindparam(1, $fName, PDO::PARAM_STR);
        $results-> bindparam(2, $lName, PDO::PARAM_STR);
        $results-> bindparam(3, $email, PDO::PARAM_STR);
        $results-> bindparam(4, $subject, PDO::PARAM_STR);
        $results-> bindparam(5, $message, PDO::PARAM_STR);
        $results->execute();
        $success = 'Thank you for your message!'; 

    } catch (Exception $e) {

        $error = 'Error submitting message';
    }
}