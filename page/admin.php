<?php
session_start();
if ($_SESSION['auth'] != 'true') {
    header('location:../index.html');
}
echo $_SESSION['auth'];
?>
<html>

</html>