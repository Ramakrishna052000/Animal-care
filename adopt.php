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
    <div class="container-fluid" id="abcd">
    <form action="adopt.php" method="get" style="margin: 20">
        What do you want to adopt:<select name="type" id="type">
                <option></option>
                <option value="all">all domestic</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="horse">Horse</option>
                <option value="bird">Bird</option>
                <option value="cow">Cow</option>
            </select>
            <input type="submit" name="submit" id="submit" value="submit" class="btn btn-info" /> 
    </form>
    </div>
<?php if(isset($_GET["submit"])) {
    include("conn.php");
    extract($_GET);
    if($type=='all'){
        $sql= "select * from addanimal order by id desc";
        $res = mysqli_query($con,$sql);
        $no=0;
        while($val = mysqli_fetch_assoc($res)){
            if($no%3==0){
                ?>
                    <div class="row"style="margin:10;padding:10">
                    <?php
            }
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                    <img src="<?php echo($val['img']);?>" class="card-img-top" width="relative" height="300">
                    <div class="card-body">
                        <h5 class="card-title">id:<?php echo($val['id']);?> name:<?php echo($val['name']);?></h5>
                        <p class="card-text">type:<?php echo($val['type']);?></p>
                        <hr>
                        <p class="card-text">age:<?php echo($val['age']);?></p>
                        <hr>
                        <p class="card-text">availability:<?php if($val['status']==1)echo ('available');else echo('adopted');?></p>
                        <hr>
                        <form action="adoptanimal.php" method="get" style="margin: 20">
                            <input type="hidden" name="id" value="<?php echo($val['id']);?>">
                            <button class="btn btn-primary" type="submit">Adopt</button>
                        </form>    
                    </div>
                </div>
            </div>    
            <?php
                if($no%3==2){
                    ?></div><?php
            ?>
            <?php
                }
            $no++;
        }
        if($no%3==1)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }if($no%3==2)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }
    }
    else if($type=='dog'){
        $sql= "select * from addanimal where type='dog' order by id desc";
        $res = mysqli_query($con,$sql);
        $no=0;
        while($val = mysqli_fetch_assoc($res)){
            if($no%3==0){
                ?>
                    <div class="row"style="margin:10;padding:10">
                    <?php
            }
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                    <img src="<?php echo($val['img']);?>" class="card-img-top" width="relative" height="300">
                    <div class="card-body">
                        <h5 class="card-title">id:<?php echo($val['id']);?> name:<?php echo($val['name']);?></h5>
                        <p class="card-text">type:<?php echo($val['type']);?></p>
                        <hr>
                        <p class="card-text">age:<?php echo($val['age']);?></p>
                        <hr>
                        <p class="card-text">availability:<?php if($val['status']==1)echo ('available');else echo('adopted');?></p>
                        <hr>
                        <form action="adoptanimal.php" method="get" style="margin: 20">
                            <input type="hidden" name="id" value="<?php echo($val['id']);?>">
                            <button class="btn btn-primary" type="submit">Adopt</button>
                        </form>
                    </div>
                </div>
            </div>    
            <?php
                if($no%3==2){
                    ?></div><?php
            ?>
            <?php
                }
            $no++;
        }
        if($no%3==1)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }if($no%3==2)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }
    }
    else if($type=='cat'){
        $sql= "select * from addanimal where type='cat' order by id desc";
        $res = mysqli_query($con,$sql);
        $no=0;
        while($val = mysqli_fetch_assoc($res)){
            if($no%3==0){
                ?>
                    <div class="row"style="margin:10;padding:10">
                    <?php
            }
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                    <img src="<?php echo($val['img']);?>" class="card-img-top" width="relative" height="300">
                    <div class="card-body">
                        <h5 class="card-title">id:<?php echo($val['id']);?> name:<?php echo($val['name']);?></h5>
                        <p class="card-text">type:<?php echo($val['type']);?></p>
                        <hr>
                        <p class="card-text">age:<?php echo($val['age']);?></p>
                        <hr>
                        <p class="card-text">availability:<?php if($val['status']==1)echo ('available');else echo('adopted');?></p>
                        <hr>
                        <form action="adoptanimal.php" method="get" style="margin: 20">
                            <input type="hidden" name="id" value="<?php echo($val['id']);?>">
                            <button class="btn btn-primary" type="submit">Adopt</button>
                        </form>
                    </div>
                </div>
            </div>    
            <?php
                if($no%3==2){
                    ?></div><?php
            ?>
            <?php
                }
            $no++;
        }
        if($no%3==1)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }if($no%3==2)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }
    }
    else if($type=='horse'){
        $sql= "select * from addanimal where type='horse' order by id desc";
        $res = mysqli_query($con,$sql);
        $no=0;
        while($val = mysqli_fetch_assoc($res)){
            if($no%3==0){
                ?>
                    <div class="row"style="margin:10;padding:10">
                    <?php
            }
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                    <img src="<?php echo($val['img']);?>" class="card-img-top" width="relative" height="300">
                    <div class="card-body">
                        <h5 class="card-title">id:<?php echo($val['id']);?> name:<?php echo($val['name']);?></h5>
                        <p class="card-text">type:<?php echo($val['type']);?></p>
                        <hr>
                        <p class="card-text">age:<?php echo($val['age']);?></p>
                        <hr>
                        <p class="card-text">availability:<?php if($val['status']==1)echo ('available');else echo('adopted');?></p>
                        <hr>
                        <form action="adoptanimal.php" method="get" style="margin: 20">
                            <input type="hidden" name="id" value="<?php echo($val['id']);?>">
                            <button class="btn btn-primary" type="submit">Adopt</button>
                        </form>
                    </div>
                </div>
            </div>    
            <?php
                if($no%3==2){
                    ?></div><?php
            ?>
            <?php
                }
            $no++;
        }
        if($no%3==1)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }if($no%3==2)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 500">
                </div>
            </div>
            </div>
            <?php
        }
    }
    else if($type=='bird'){
        $sql= "select * from addanimal where type='bird' order by id desc";
        $res = mysqli_query($con,$sql);
        $no=0;
        while($val = mysqli_fetch_assoc($res)){
            if($no%3==0){
                ?>
                    <div class="row"style="margin:10;padding:10">
                    <?php
            }
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                    <img src="<?php echo($val['img']);?>" class="card-img-top" width="relative" height="300">
                    <div class="card-body">
                        <h5 class="card-title">id:<?php echo($val['id']);?> name:<?php echo($val['name']);?></h5>
                        <p class="card-text">type:<?php echo($val['type']);?></p>
                        <hr>
                        <p class="card-text">age:<?php echo($val['age']);?></p>
                        <hr>
                        <p class="card-text">availability:<?php if($val['status']==1)echo ('available');else echo('adopted');?></p>
                        <hr>
                        <form action="adoptanimal.php" method="get" style="margin: 20">
                            <input type="hidden" name="id" value="<?php echo($val['id']);?>">
                            <button class="btn btn-primary" type="submit">Adopt</button>
                        </form>
                    </div>
                </div>
            </div>    
            <?php
                if($no%3==2){
                    ?></div><?php
            ?>
            <?php
                }
            $no++;
        }
        if($no%3==1)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }if($no%3==2)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }
    }
    else if($type=='cow'){
        $sql= "select * from addanimal where type='cow' order by id desc";
        $res = mysqli_query($con,$sql);
        $no=0;
        while($val = mysqli_fetch_assoc($res)){
            if($no%3==0){
                ?>
                    <div class="row"style="margin:10;padding:10">
                    <?php
            }
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                    <img src="<?php echo($val['img']);?>" class="card-img-top" width="relative" height="300">
                    <div class="card-body">
                        <h5 class="card-title">id:<?php echo($val['id']);?> name:<?php echo($val['name']);?></h5>
                        <p class="card-text">type:<?php echo($val['type']);?></p>
                        <hr>
                        <p class="card-text">age:<?php echo($val['age']);?></p>
                        <hr>
                        <p class="card-text">availability:<?php if($val['status']==1)echo ('available');else echo('adopted');?></p>
                        <hr>
                        <form action="adoptanimal.php" method="get" style="margin: 20">
                            <input type="hidden" name="id" value="<?php echo($val['id']);?>">
                            <button class="btn btn-primary" type="submit">Adopt</button>
                        </form>
                    </div>
                </div>
            </div>    
            <?php
                if($no%3==2){
                    ?></div><?php
            ?>
            <?php
                }
            $no++;
        }
        if($no%3==1)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            <div class="col" style="width:30%;">
                <div class="card" style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }if($no%3==2)
        {
            ?>
            <div class="col" style="width:30%;">
                <div class="card"style="height: 600">
                </div>
            </div>
            </div>
            <?php
        }
    }
}
?>
    <div id="contact" style="margin:0;padding:0;background-color: dimgrey;width: 100%;height: 300" >
        
    </div>
    <div id="contact" style="margin:0;padding:0;background-color:darkgray;width: 100%;height: 200">
        <p style="text-align: center;padding-top: 100;color:floralwhite"><u>Developed By</u>:Ramakrishna</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>    
</html>    