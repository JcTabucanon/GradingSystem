<?php

if (isset($_POST["submit"])) {
    #Grabbing data
    $studentid = $_POST["studentid"];

    include_once "../database/database.classes.php";
    include_once "../classes/student-login.classes.php";
    include_once "../controller/student-login.contr.php";

    $login = new StudentLoginContr($studentid);

    $login->loginUser();

    header('Location: ../view/homepage.php');
}
