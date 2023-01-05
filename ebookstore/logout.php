<?php
if( session_status() >= 0){
    session_start();
    session_unset();
    session_destroy();
    echo '<script>alert("log out")</script>';
}
header("refresh: 0;url=index.php");
?>