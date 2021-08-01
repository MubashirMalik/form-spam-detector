<?php

    if(isset($_POST["submit-btn"])) {

        $fname = $_POST["fname"];
        $email = $_POST["email"];
        $msg = $_POST["message"];

        if (isset($_POST["hidden-input"]) && !empty($_POST["hidden-input"])){
            echo "SPAM!!";
            die();
        }
        echo "<h1>Email sent successfully!</h1>";
    }