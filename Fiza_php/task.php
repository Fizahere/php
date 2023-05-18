<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1px">
    <tbody>

    <?php
    $numOfRows=10;
    $numOfCols=5;
    for($i=1;$i<=$numOfRows;$i++){
        ?>
<tr></tr>
<?php
for($j=1;$j<=$numOfCols;$j++){
    ?>
    <td></td>
    <?php
}

    }
?>
    </tbody>
</table>
</body>
</html>