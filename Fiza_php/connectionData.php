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
    <div class='container'>

        <?php
        $query = $pdo->query('select * from staff');
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $staff) {
            ?>
            <table class='table table-striped'>
                <tr>
                    <td>
                        <?php echo $staff['id'] ?>
                    </td>
                    <td>
                        <?php echo $staff['NAME'] ?>
                    </td>
                    <td>
                        <?php echo $staff['Gender'] ?>
                    </td>
                    <td>
                        <?php echo $staff['Salary'] ?>
                    </td>
                    <td>
                        <?php echo $staff['Department'] ?>
                    </td>
                </tr>
            </table>
            <?php
        }
        ?>

    </div>
</body>

</html>