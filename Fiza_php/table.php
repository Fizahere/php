<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table cellspacing="5px" border="1px">
<thead>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
</thead>
<tbody>
    
    <?php
// $i=1;
// while($i<=10){
//     echo "<tr>".
//  "<td>"."</td>".
//  "<td>"."</td>".
//  "<td>"."</td>".
//  "</tr>";
//  $i++;
// }

$i=1;
do{
    echo "<tr>".
 "<td>"."</td>".
 "<td>"."</td>".
 "<td>"."</td>".
 "</tr>";$i++;
}
while($i<=10)

// for($i=1; $i<=10; $i++){
// echo "<tr>".
//  "<td>"."</td>".
//  "<td>"."</td>".
//  "<td>"."</td>".
//  "</tr>";
// }

    ?>
</tbody>


    </table>
</body>
</html>