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
    <form action="">

      <div class="form-group">
        <label for="">ID</label>
        <input type="text" name="u_id" class="form-control" placeholder="">
      </div>

      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="u_name" class="form-control" placeholder="">
      </div>

      <div class="form-group">
        <label for="">Gender</label>
        <input type="text" name="u_gender" class="form-control" placeholder="">
      </div>

      <div class="form-group">
        <label for="">Salary</label>
        <input type="text" name="u_salary" class="form-control" placeholder="">
      </div>

      <div class="form-group">
        <label for="">Department</label>
        <input type="text" name="u_depart" class="form-control" placeholder="">
      </div>

      <button type='submit' name='update' class='btn btn-dark'>Update</button>

    </form>
  </div>


  <?php
  if (isset($_POST['update'])) {

    $name = $_POST['u_name'];
    $gender = $_POST['u_gender'];
    $salary = $_POST['u_salary'];
    $department = $_POST['u_depart'];

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