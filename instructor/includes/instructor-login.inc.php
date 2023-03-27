<?php

if (isset($_POST["submit"])) {
    #Grabbing data
    $instructorcode = $_POST["instid"];

    include_once "../database/database.classes.php";
    include_once "../classes/instructor-login.classes.php";
    include_once "../controller/instructor-login.contr.php";

    $login = new InstructorLoginContr($instid);

    $login->loginUser();

    header('Location: ../view/homepage.php');
}
