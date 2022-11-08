<?php
session_start();
include("../includes/config.php");
$_SESSION['login']=="";
session_unset();

?>
<script language="javascript">
document.location="../index.html";
</script>
