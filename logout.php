<?php
session_start();
session_unset();
session_destroy();
echo "you sucessfully log out";
?>

