<?php
    include("../inc/config.php");
    session_start();
    session_unset();
    session_destroy();
    $location = "Location:". BASEURL ."index.php";
    header($location);
?>