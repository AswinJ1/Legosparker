<?php
include 'main_header.php';
session_start();
session_destroy();
session_unset();


?>
<html>
<body>
    <h3 style="text-align:center;">You have been logged out. <a href="user.php">Go back</a></h3>
    </body>
</html>