<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ojrowumb by Jonghan</title>
</head>
<body>
<i>Last Update: 2020-08-05 4AM</i>
<h1>iihae artwork series 1<br> - ojrowumb</h1>
<p>&nbsp&nbsp&nbsp&nbsp<a href="jonghan_ojrowumb.php?id=background">background</a>&nbsp&nbsp&nbsp&nbsp<a href="jonghan_ojrowumb.php?id=mathmatical-modeling">mathmatical-modeling</a>&nbsp&nbsp&nbsp&nbsp<a href="jonghan_ojrowumb.php?id=physical">physical</a>&nbsp&nbsp&nbsp&nbsp<a href="jonghan_ojrowumb.php?id=how-to">how-to</a></p>

<h2>
    <?php
    echo $_GET['id'];
    ?>
</h2>
<?php
echo file_get_contents("data/".$_GET['id']);
?>

<footer>
    <p>by 2020 Han Park. <br> &nbsp&nbsp&nbsp me@han-park.info</p>
</footer>
</body>
</html>