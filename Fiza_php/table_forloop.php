<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            padding: 2px 3px;
        }
    </style>
</head>
<body>
    <table border="1px">
    
      <tbody>
      
      </tbody>
      <?php
      for ($i=1; $i <= 10; $i++) { 
        ?>
   
<tr>
    <td><?php echo '2' ?></td>
    <td><?php echo 'x' ?></td>
    <td><?php echo $i ?></td>
    <td><?php echo '=' ?></td>
    <td><?php echo 2*$i ?></td>
</tr>


      <?php
   }
      ?>
    </table>

</body>
</html>