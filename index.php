<?php 
error_reporting(0);
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Puskeswan</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="assets/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="assets/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    
    <script src="assets/js/login.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
    <body>
        <?php 
        if (empty($_SESSION['level'])) {
            /*Menu Login*/
            include 'login_form.php';
        } elseif ($_SESSION['level'] == "admin") {
            /* Menu Admin */
            include 'admin.php';
        } elseif ($_SESSION['level'] == "users") { 
            /* Menu user */
            include 'user.php';
        } else {
            header("location:login.php");
        } ?>

        <!-- jQuery -->
        <script src="assets/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATsyBZTxFhSWxErveOnJXfwsE4qPqBf7k&callback=initMap"></script>
    </body>
</html>