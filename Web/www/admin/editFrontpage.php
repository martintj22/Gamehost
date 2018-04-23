<?php
require_once("../header.php");

if(!isset($_SESSION['userLevel'])) header("Location: ../index.php");
if($_SESSION['userLevel'] < 1) header("Location: ../index.php");

$sql = "SELECT * FROM ´frontpage´ ORDER BY ´id´ DESC LIMIT 1";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetc_assoc($result)) {

}

?>

<h1>Velkommen til Admin Panelet, dette er kun for autoriserede brugere!</h1>

<form action="editFrontpageINS.php" method="POST">
<h1> Tittel </h1><br>
<input type="textarea" name="title" value="<?php echo $row['title']?>">
<h1> Why us venstre </h1><br>
<input type="textarea" name="leftInfo" value="<?php echo $row['leftInfo']?>">
<h1> Why us midt </h1><br>
<input type="textarea" name="middleInfo" value="<?php echo $row['middleInfo']?>">
<h1> Why us højre </h1><br>
<input type="textarea" name="rightInfo" value="<?php echo $row['rightInfo']?>">
<h1> Venstre billede sti </h1><br>
<input type="text" name="leftImage" value="<?php echo $row['leftImagePath']?>">
<h1> Midt billede sti </h1><br>
<input type="text" name="centerImage" value="<?php echo $row['centerImagePath']?>">
<h1> Højre billede sti </h1><br>
<input type="text" name="rightImage" value="<?php echo $row['rightImagePath']?>">