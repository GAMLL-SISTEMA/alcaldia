<?php
require_once('../globals.php');
session_start();
session_unset();
session_destroy();
ForceLoad('../index.php');
exit;
?>
