<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
ob_start();

include("database/connection.php");
include("classes/User.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.9"/>
    <?php header("Content-Type: text/html; charset=utf-8"); ?>
    <meta charset="utf-8">
    <title>MercheRS</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">MercheRS
            </a>
        </div>
        <div class="pull-right">
            <ul class="nav navbar-nav">
                <li>
                    <button type="submit" class="btn navbar-btn btn-success" name="logout" id="logout" value="Log Out">
                        Sign in
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>