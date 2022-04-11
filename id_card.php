<?php 
    if(isset($_POST['submit_btn'])){
        $name = $_POST['std_name'];
        $father = $_POST['std_father'];
        $mother = $_POST['std_mother'];
        $department = $_POST['std_department'];
        $session = $_POST['std_session'];
        $roll = $_POST['std_roll'];
        $mobile = $_POST['std_mobile'];
        $photo = $_FILES['std_photo']['name'];
        $tmp_name = $_FILES['std_photo']['tmp_name'];
        
        move_uploaded_file($tmp_name, "upload/".$photo);
    }


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City College Student Id card</title>
    <link rel="stylesheet" href="assets/css//bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

    <div class="id_card ">
        <div class="id_card_inner mx-auto mt-5">
            <p>Governtment of the People's Republic of bangladesh </p>
            <h4 class="college">Jessore Govt. City College, Jessore</h4>
            <h6 class="phone">phone: 0421-65763</h6>
            <div class="logo"><div class="logo_inner"><img src="assets/img/logo.png" alt=""></div></div>
            <h3 class="id_card_r">ID Card</h3>
            <div class="photos"><img class="profile" src="upload/<?php if(isset($photo)){echo $photo;} ?>" alt=""></div>
            <h4 class="name">Name : <?php if(isset($name)){echo $name;} ?></h4>
            <h4>Father's Name: <?php if(isset($father)){echo $father;} ?></h4>
            <h4>Mother's Name: <?php if(isset($mother)){echo $mother;} ?></h4>
            <h4>Class: Hon's.</h4>
            <h4>Dept: <?php if(isset($department)){echo $department;} ?></h4>
            <h4>Session: <?php if(isset($session)){echo $session;} ?> &nbsp; &nbsp; Roll: <?php if(isset($roll)){echo $roll;} ?></h4>
            <h4 class="mobile">Mobile: <?php if(isset($mobile)){echo $mobile;} ?></h4>
            <div class="signature"><div class="signature_inner"><img src="assets/img/signaturee.jpg" alt=""></div><h3 class="principal">Principal</h3></div>
        </div>
    </div>

</body>
</html>