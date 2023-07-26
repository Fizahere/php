<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            padding:10px;
        }
        table{
            padding:5px;
        }
    </style>
</head>
<body>
    <table border="1px">
        <tbody>
            <?php
            $numOfRows=10;
            $numOfCols=3;
            for($i=1;$i<=$numOfRows;$i++){
                ?>
<tr>
    <?php
for($j=1;$j<=$numOfCols;$j++){
    ?>
<td></td>
    <?php
}
?>
</tr>
<?php 
            }
            ?>
        </tbody>
    </table>
</body>
</html>