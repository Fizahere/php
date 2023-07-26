<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:black;
        }
        td{
            padding: 15px 20px;
            background-color:yellow;
        }
        table{
            padding:20px;
            background-color:aliceblue;
        }
        .table1{
            margin-top:100px;
            margin-left:500px
        }
        .table2{
            margin-top:-350px;
            margin-left:200px;
            background-color:skyblue;
        }
        
    </style>
</head>
<body>
    <table class=table1 border="2px">
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
    <table class=table2 border="2px">
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