<?php
session_start ();
session_regenerate_id();
include 'head.php';
include 'commonvars.php';
include 'nav.php';
?>

<?php
$_SESSION['signed_in'] = false;
$_SESSION['user_id']    = "";
$_SESSION['user_name']  = "";
$_SESSION['user_level'] = 0;
session_destroy();
                
echo 'You have signed out. <br>';
include 'footer.php';
?>