<?php

include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link rel="stylesheet" href="bootstrap.min.css">

</head>

<body>
  <div class='container mt-5'>
    <form action="" method="post">

      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" placeholder="">
      </div>

      <div class="form-group">
        <label for="">Gender</label>
        <input type="text" name="gender" class="form-control" placeholder="">
      </div>

      <div class="form-group">
        <label for="">Salary</label>
        <input type="text" name="salary" class="form-control" placeholder="">
      </div>

      <div class="form-group">
        <label for="">Department</label>
        <input type="text" name="depart" class="form-control" placeholder="">
      </div>

      <button type='submit' value='submit' class="btn btn-dark" name='insert'>Insert</button>

    </form>
  </div>

  <?php
  if (isset($_POST['insert'])) {

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $salary = $_POST['salary'];
    $department = $_POST['depart'];

    $query = $pdo->prepare('insert into staff (NAME,Gender,Salary,Department) values (:name,:gender,:salary,:department)');
    $query->bindParam('name', $name);
    $query->bindParam('gender', $gender);
    $query->bindParam('salary', $salary);
    $query->bindParam('department', $department);

    $query->execute();
    echo 'Data inserterted successfully';

  }
  ?>
</body>

</html>