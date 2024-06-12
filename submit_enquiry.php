<?php
include 'Common/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `customerenquiries`(`fname`, `lname`, `email`, `phone`, `service`, `event_date`, `event_venue`, `message`) 
    VALUES ('$fname','$lname','$email','$phone','$service','$date','$venue','$message')";

    if ($conn->query($sql)) {
        echo "<p class='success'><i class='fa-solid fa-check'></i>Enquiry submitted successfully!</p>";
    } else {
        echo "<p class='fail'><i class='fa-solid fa-x'></i></i>Enquiry submission error!</p>";
    }

    $conn->close();
} else {
    echo "Invalid request!";
}

?>

<link rel="stylesheet" href="Styles/submit_enquiry.css">
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/0894db3b48.js" crossorigin="anonymous"></script>