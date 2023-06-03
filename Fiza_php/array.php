<?php

$studentsData = ['studentOne' => 'Fiza','studentTwo' => 'Ali','studentThree' => 'Aqsa'];
echo $studentsData['studentOne'].'</br>';

foreach ($studentsData as $key => $value) {
    echo $key . '=' . $value . '</br>';
}

?>

<h1>ForLoop</h1>

<?php
$studentsData = [ 'Fiza','Ali','Aqsa'];

for($i=1;$i<=count($studentsData);$i++){
echo $studentsData[$i];
}

?>