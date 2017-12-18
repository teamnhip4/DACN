<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link type="text/css" href="../cssjsadmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="../cssjsadmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="../cssjsadmin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="../cssjsadmin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>

</head>
<body>
<?php
        include __DIR__ .'/includes/header.php';
        
    ?>
<?php
        session_start();
        if(!isset($_SESSION['login_us']))
            header("location:login.php");
      ?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <?php
                    include __DIR__ ."/includes/connect.php";
                    include __DIR__ .'/includes/sidebar.php';
                ?>
            </div>
                <?php
                if(isset($_REQUEST['page']))
                {
                   $page=$_REQUEST['page'];
                   switch ($page)
                    {
                        
                        case 'logout';
                            include "cms/logout.php";
                                break;
                        case 'tinnhan';
                            include "cms/tinnhan.php";
                            break;
                        case 'thanhvien';
                            include "cms/thanhvien.php";
                            break;
                    
                    }
                
                }
                else include "cms/center.php";
               ?>
           
            
        </div>
    </div>
                            <!--/.container-->
</div>
                        <!--/.wrapper-->

         <?php
            include __DIR__.'/includes/footer.php';
         ?>
   <script src="../cssjsadmin/ckeditor/ckeditor.js" type="text/javascript"></script>
	<script src="../cssjsadmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="../cssjsadmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/common.js" type="text/javascript"></script>
    <script src="../cssjsadmin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
</body>
</html>