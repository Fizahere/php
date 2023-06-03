<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <form action="marksheet.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <h2>student data</h2>

                    <div class="form-group mt-5">
                        <label>First Name</label>
                        <input class="form-control" type="text" name="first_name">
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input class="form-control" type="text" name="last_name">
                    </div>

                    <div class="form-group">
                        <label>Class</label>
                        <input class="form-control" type="text" name="class">
                    </div>

                    <div class="form-group">
                        <label>School</label>
                        <input class="form-control" type="text" name="school">
                    </div>

                    <div class="form-group">
                        <label>Date of birth</label>
                        <input class="form-control" type="date" name="birth_date">
                    </div>

                    <div class="form-group">
                        <label>Roll Number</label>
                        <input class="form-control" type="number" name="roll_num">
                    </div>

                </div>

                <div class="col-md-6">

                <h2>subjects</h2>

                    <div class="form-group mt-5">
                        <label>English</label>
                        <input class="form-control" type="number" name="eng">
                    </div>

                    <div class="form-group">
                        <label>Urdu</label>
                        <input class="form-control" type="number" name="urdu">
                    </div>

                    <div class="form-group">
                        <label>Physics</label>
                        <input class="form-control" type="number" name="phys">
                    </div>

                    <div class="form-group">
                        <label>Chemistry</label>
                        <input class="form-control" type="number" name="chem">
                    </div>

                    <div class="form-group">
                        <label>Islamiat</label>
                        <input class="form-control" type="number" name="isl">
                    </div>

                    <div class="form-group">
                        <label>Biology</label>
                        <input class="form-control" type="number" name="bio">
                    </div>

                </div>

                <input type="submit" name="submit" value="Submit" class="btn btn-dark">

            </div>
        </form>




    </div>
</body>

</html>