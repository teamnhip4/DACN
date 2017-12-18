<!DOCTYPE html>
<html lang="en">
<head>
  <title>LShop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
  <link rel="stylesheet" type="text/css" href="Css/mycss.css">
  <link rel="stylesheet" type="text/css" href="Css/media.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='Js/sweet-alert.min.js'></script>
  <script src="Js/display.js"></script>
  <link rel="stylesheet" type="text/css" href="cssjsadmin.login.css">
  <link rel="stylesheet" type="text/css" href="cssjsadmin.theme.css">
  <link href="https://fonts.googleapis.com/css?family=Mitr:300" rel="stylesheet">
</head>
<body style="font-family: 'Mitr', sans-serif;font-size: 16px;">
  <?php
    ob_start();
    session_start();
    include ('./php/connect.php');
    include('php/header.php');
  ?>
  <?php
        if(isset($_REQUEST['page']))
        {
           $page=$_REQUEST['page'];
           switch ($page)
           {
               case "register";
                   include 'php/register.php';
                   break;
               case "login";
                   include 'php/login.php';
                   break;
               case "logout";
                   include 'php/logout.php';
                   break;
              case "order";
              include 'php/order.php';
                  break;
                }
        }
        else
        {
            include 'php/section.php';
        }
        
       ?>
   
<?php
  include 'php/footer.php';
?>

