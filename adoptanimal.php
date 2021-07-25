<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel = "icon" href ="Logo.png" type = "image/x-icon"> 
    <title>adopt</title>
</head>
<body style="margin: 0;padding: 0">
    <nav class="navbar navbar-light" style="background-color:#A3A3A3; height:120;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html" style="font-size: 60">
                <img src="Logo.png" alt="" width="100" height="100" class="d-inline-block align-top">
                Animal Care    
            </a>
                <ul class="nav nav-pills ">
                    <li class="nav-item">
                        <a class="nav-link"  href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Login</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="alogin.html">Admin</a></li>
                            <li><a class="dropdown-item" href="vlogin.html">Volunteer</a></li>
                            <li><a class="dropdown-item" href="mlogin.html">Member</a></li>
                            <li><hr class="dropdown-divider" ></li>
                            <li><a class="dropdown-item" href="register.html">Register</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Adopt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daycare.html">Daycare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="locate.html">Locate us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="donate.html">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact us</a>
                    </li>
                </ul>
        </div>
    </nav>
    <?php
    include("conn.php");
    extract($_GET);
    $sql= "select * from addanimal where id='$id'";
    $res = mysqli_query($con,$sql);
    $no=0;
    $val = mysqli_fetch_assoc($res);?>
    <div class="container-fluid" style="margin-left: 32%;margin-top: 60;margin-bottom: 60">
        <form action="appointment.php" method="get">
            <div class="input-group mb-3" style="width: 600">
                <span class="input-group-text" >Name:</span>
                <input type="text" class="form-control" placeholder="name" name='name' required>
            </div>
            <div class="input-group mb-3" style="width: 600">
                <span class="input-group-text">Age:</span>
                <input type="number" class="form-control" name="age" id="age" placeholder="in Years" required>
            </div>
            <div class="mb-3" style="width: 600">
                <span class="input-group-text">Gender:</span>
                <input class="form-check-input" type="radio" id="male" name="gender" value="male" style="margin-top: 14" required>
                <label class="form-check-label" for="flexRadioDefault1" style="margin-right: 20;margin-top: 10">
                    Male
                </label>
                <input class="form-check-input" type="radio" id="female" name="gender" value="female" style="margin-top: 14" required>
                <label class="form-check-label" for="flexRadioDefault1" style="margin-right: 20;margin-top: 10">
                    Female
                </label>
                <input class="form-check-input" type="radio" id="other" name="gender" value="other" style="margin-top: 14" required>
                <label class="form-check-label" for="flexRadioDefault1"style="margin-top: 10">
                    other
                </label>
            </div>
            <div class="input-group mb-3" style="width: 600">
                <span class="input-group-text">Contact number:</span>
                <input type="number" class="form-control" id="no" name="no" placeholder="9999999999" required>
            </div>
            <div class="input-group mb-3" style="width: 600">
                <textarea  name="add" class="form-control" aria-label="address"required></textarea>
            </div>
            <div class="input-group mb-3" style="width: 600">
                <input type="date" name="date"required>
            </div>
            <input type="hidden" name="id" value="<?php echo($val['id']);?>">
            <input type="submit" id="submit" value="submit" class="btn btn-primary"/> 
        </form>
    </div>