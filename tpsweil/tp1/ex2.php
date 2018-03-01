<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Hello</title>
</head>
<body>
<form method="GET" action="ex2.php">
    <label for="size">Size : </label>
    <input type="number" value="" name="size" id="size">
    <label for="color">Color : </label>
    <input type="text" value="" name="color" id="color">
    <input type="submit" value="Valider">
</form>
   

<?php
if (isset($_GET['message'])){
    echo "<div style='font-size: {$_GET['size']}px; color: {$_GET['color']}'>Message de taille {$_GET['size']}px en {$_GET['color']} </div>";
} else {
    echo "<div style='font-size: 15px;font-color: black'>Message de taille 15px en noir</div>";


}

    ?>
</body>
</html>