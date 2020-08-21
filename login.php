<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-2.2.4.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="includes/style.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <center><h4>Front end validations</h4></center>
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
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

