<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='post'>
        <label for="">File name</label>
        <input type="text" name='fileName'>
        <br>      <br>
        <input type="submit" name='submit' value='find extension'>
    </form>

<?php
if(isset($_POST['submit'])){
findExtension();
};
function findExtension(){
$fileName = $_POST['fileName'];
$extension = explode('.',$fileName);
// $fileExte = $extension[count($extension)-1]
$fileExte = $extension[array_key_last($extension)];
// echo $fileExte;
if($fileExte=='jpeg' || $fileExte=='jpg' || $fileExte=='png' || $fileExte=='svg'){
    echo 'Valid';
}
else{
    echo 'not valid';
}
}

?>

</body>
</html>