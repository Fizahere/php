<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$Name='Fiza';
if($Name=='Fiza'){
    ?>
   <h1 style="color:green"><?php echo 'Welcome'.$Name ?></h1>;
   <?php
}
   
else{
    ?>
   <h1 style="color:red"><?php echo 'Name not matched' ?></h1>;
<?php
}
   ?>

   
</body>
</html>