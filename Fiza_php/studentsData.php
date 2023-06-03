<?php

include('connection.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <?php
$query = $pdo->query('select * from students');
$results =  $query->fetchAll(PDO::FETCH_ASSOC);
foreach($results as $studentsData){
    ?>
    <table class='table table-striped'>
        <tr>
            <td><?php echo $studentsData['id'] ?></td>
            <td><?php echo $studentsData['Name'] ?></td>
            <td><?php echo $studentsData['Email'] ?></td>
            <td><?php echo $studentsData['Gender'] ?></td>
            <td><?php echo $studentsData['Age'] ?></td>
            <td><?php echo $studentsData['Birthdate'] ?></td>
        </tr>
    </table>
    
    
    <?php
}
        ?>
    </div>
</body>
</html>