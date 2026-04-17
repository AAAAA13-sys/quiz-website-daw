<?php
// session_start() is already called in config.php which is required by index.php
session_destroy();
header("Location: index.php");
exit();
?>
