<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if (isset($_SESSION['id'])) {
  echo "Hello ".$_SESSION['email_id'];
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
                        <form method="POST" action="includes/signupscript.php">
                            <div class="form-group">
                                <label for="email">Email_id</label>
                                <input type="email" class="form-control" id="email_id" name="email_id">
                            </div>
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                    <input type="password" class="form-control" placeholder="password" name="password" required = "true" pattern=".{6,}">
                                </div>
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                        </form>
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
