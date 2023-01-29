<?php require("header.php");?>
<?php
 session_destroy();
 header("Location:"."index.php");
?>
<?php require("footer.php");?>