<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
<a href="?message=1">Page n° 1</a>
    <br/>
<a href="?message=2">Page n° 2</a>
    <br/>
<a href="?message=3">Page n° 3</a>
    <br/>
<?php
if (isset($_GET['message'])){
echo 'Vous êtes sur la page n° '.$_GET['message'];
} else {
    echo "LOL";}
?>
</body>
</html>