<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<style>
html{
        font-family: sans-serif;
    }
</style>
<body>
    <?php
    if (isset($_POST['submit'])) {

        $studentFirstName = $_POST['first_name'];
        $studentLastName = $_POST['last_name'];
        $studentClass = $_POST['class'];
        $schoolName = $_POST['school'];
        $dateOfBirth = $_POST['birth_date'];
        $rollNumber = $_POST['roll_num'];
        $English = $_POST['eng'];
        $Urdu = $_POST['urdu'];
        $Islamiat = $_POST['isl'];
        $Biology = $_POST['bio'];
        $Physics = $_POST['phys'];
        $Chemistry = $_POST['chem'];


    }

    ?>
<div Class="container mt-5">
    <table border="1px">
        <h1 Class="p-3">Board Of Intermediate</h1>
        <tbody>
            <div Class="row ml-5">

                <div>
                    <tr>
                        <td>First Name</td>
                         
                        <td>
                            <?php echo $studentFirstName ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Last Name</td>
                        
                        <td>
                            <?php echo $studentLastName ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Class</td>
                        
                        <td>
                            <?php echo $studentClass ?>
                        </td>
                    </tr>

                    <tr>
                        <td>School</td>
                        
                        <td>
                            <?php echo $schoolName ?>
                        </td>
                    </tr>

                    <tr>
                        <td>DateOfBirth</td>
                        
                        <td>
                            <?php echo $dateOfBirth ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Roll Number</td>
                        
                        <td>
                            <?php echo $rollNumber ?>
                        </td>
                    </tr>
                </div>

                <div Class="mt-5">

                    <tr>
                        <td>English</td>
                         <td>100</td>
                          <td></td>
                        <td>
                            <?php echo $English ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Urdu</td>
                         <td>100</td>
                          <td></td>
                        <td>
                            <?php echo $Urdu ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Islamiat</td>
                         <td>100</td>
                          <td></td>
                        <td>
                            <?php echo $Islamiat ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Physics</td>
                         <td>100</td>
                          <td></td>
                        <td>
                            <?php echo $Physics ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Chemistry</td>
                        <td>100</td>
                         <td></td>
                        <td>
                            <?php echo $Chemistry ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Biology</td>
                         <td>100</td>
                          <td></td>
                        <td>
                            <?php echo $Biology ?>
                        </td>
                    </tr>

                
                    <tr>
                        <td>Obtain Marks</td>
                         <td>600</td>
                         <td></td>
                        <td>
                            <?php echo $Biology+$English+$Islamiat+$Physics+$Chemistry+$Biology ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Percentage</td>
                         <td>100%</td>
                         <td></td>
                        <td>
                            <?php echo ($Biology+$English+$Islamiat+$Physics+$Chemistry+$Biology)/600*100 .'%' ?>
                        </td>
                    </tr>

                </div>
            </div>
        </tbody>
    </table>
</div>

</body>

</html>