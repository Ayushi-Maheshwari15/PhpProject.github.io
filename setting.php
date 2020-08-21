<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if (isset($_SESSION['id'])) {
  echo "Hello ".$_SESSION[‘email_id’];
} else {
  echo "Hello Guest";
}
?>
<html>
    <head>
        <title>signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-2.2.4.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="includes/style.css" type="text/css">
    
    
        <style>
            .top_margin{
                margin-top:20px;
            }
        </style>
    </head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    
     <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">User Registration</div>
                    <div class="panel-body">
                        <form method="POST" action="includes/settingscript.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email_id" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="old password" name="password" required = "true" pattern=".{6,}">
                                </div>
                            <div class="form-group">
                                    <input type="password" class="form-control" placeholder="new password" name="password" required = "true" pattern=".{6,}">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </form><br/>
                        
                               </div>
                </div>
            </div>
        </div>
    </div>
    <?php
     include 'includes/footer.php';
     ?>
</body>
</html>


