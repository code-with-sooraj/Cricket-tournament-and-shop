<?php
session_start();
$regd = $_SESSION['user'];
echo "<script>alert('logging you out');</script>";
session_destroy();
echo "<script>location.href = '../../load.html';</script>"
?>