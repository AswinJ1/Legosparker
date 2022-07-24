<?php  
session_start();
session_destroy();
session_unset();
session_start();
$_SESSION['errmsg']="You have successfully logout";

?>
<html>
<body>
    <h3 style="text-align:center;">You have been logged out. <a href="index-main.php">Go back</a></h3>
    </body>
</html>