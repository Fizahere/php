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

$Col = 3;
$Row =5;

for ($i=1; $i < $Col ; $i++) {
    echo '<tr>'.$i.'</tr>';
 for ($j=0; $j < $Row ; $j++) { 
  
    echo '<td>'.$j.'</td>';
 }
}
    ?>
    </tbody>
    </table>
</body>
</html>