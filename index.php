<?php
    $title = $_POST["title"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $dob = $_POST["dob"];
    $telephone = $_POST["telephone"];
    $fileupload = $_POST["fileupload"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    echo "<h1 style='text-align:center; margin-top:50px;'>Hello " . $title . $firstname . " " . $lastname . "</h1>";
    echo "<h2 style='text-align:center;'> You have submitted the following details:</h2>";
    echo "<h3 style='text-align:center;'> Date of Birth: " . $dob . "</h3>";
    echo "<h3 style='text-align:center;'> Telephone: " . $telephone . "</h3>";
    echo "<h3 style='text-align:center;'> File Uploaded: " . $fileupload . "</h3>";
    echo "<h3 style='text-align:center;'> Message: " . $message . "</h3>";

?>