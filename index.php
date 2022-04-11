
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card Project</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <form action="id_card.php" method="POST" enctype="multipart/form-data">
        <h1 class="text-primary text-center"> <a style="text-decoration:none;" href="index.php"> City College Studect ID Card</a></h1>
        <div class="container shadow rounded my-4 p-4"> 
            <div class="form-row">
                <div class="form-group input_box col-md-6 ">
                    <label class="std_name">Student Name</label>
                    <input type="text" class="form-control" name="std_name" placeholder="">
                </div>
                <div class="form-group input_box col-md-6">
                    <label>Student Photo</label>
                    <input type="file" class="form-control" name="std_photo" placeholder="">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group input_box col-md-6 ">
                    <label>Father name</label>
                    <input type="text" class="form-control" name="std_father" placeholder="">
                </div>
                <div class="form-group input_box col-md-6">
                    <label>Mother name</label>
                    <input type="text" class="form-control" name="std_mother" placeholder="">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group input_box col-md-6">
                    <label>Department</label>
                    <input type="text" class="form-control" name="std_department" placeholder="">
                </div>
                <div class="form-group input_box col-md-6">
                    <label>Session</label>
                    <input type="text" class="form-control" name="std_session" placeholder="">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group input_box col-md-6">
                    <label>Roll</label>
                    <input type="number" class="form-control" name="std_roll" placeholder="">
                </div>
                <div class="form-group input_box col-md-6">
                    <label>Mobile Nuber</label>
                    <input type="number" class="form-control" name="std_mobile" placeholder="">
                </div>
            </div>
            <input class="form-control btn btn-primary mb-3" type="submit" value="Submit Your Information" name="submit_btn">
        </div>
    </form>


           

</body>

</html>