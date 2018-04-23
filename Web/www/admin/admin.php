<?php
require_once("../header.php");

if(!isset($_SESSION['userLevel'])) header("Location: ../index.php");
if($_SESSION['userLevel'] < 1) header("Location: ../index.php");

?>

<h1>Velkommen til Admin Panelet, dette er kun for autoriserede brugere!</h1>

<a class="button" href="editFrontpage.php"> Forside-administration </a>


<?php
require_once("../footer.php");
?> 