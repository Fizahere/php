<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
</head>
<body>
    
<form action="" class="container" method="Post">
<div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<br>
<div class="form-group">
  <label for="">age</label>
  <input type="number" name="age" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<br>

<div class="form-group">
  <label for="">salary</label>
  <input type="number" name="salary" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<br>

<div class="form-group">
  <label for="">Loan Amount</label>
  <input type="number" name="loan" id="" class="form-control" placeholder="100000 to 400000" aria-describedby="helpId">

</div>
<br>

<!-- <div class="form-group">
  <label for="">Advanced payment</label>
  <input type="number" name="a_payment" id="" class="form-control" placeholder="" aria-describedby="helpId">

</div>
<br> -->

<div class="form-group">
  <label for="">Select Number of year</label>
  <select class="form-control" name="year" id="">
    <option value="">select</option>
    <option>5</option>
    <option>10</option>
    <option>15</option>
  </select>
</div>
<br>

<input type="submit" class="btn btn-dark" name="get_loan" value="get_loan">


</form>


<?php

if (isset($_POST['get_loan'])) {
    # code...
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    $loan = $_POST['loan'];
    $years = $_POST['year'];

if ($age<=25 && $salary<=30000) {
    # code...
    echo $name . ' ! you are not eligible.';
}
else{
    $result = $years*12;
    $instalment =$loan/$result;
    echo $name." ! you wil've to pay ".$instalment.' every month.' ;

}

};

?>