<?php
include("conn.php");
extract($_GET);
if(!mysqli_error($con))
{  
        $sql ="select pwd from member where id='$id'";
        $res = mysqli_query($con,$sql);
        $val = mysqli_fetch_assoc($res);
        if($pwd =$val['pwd']){
        $_SESSION["favcolor"] = 1;
        echo "<script> alert('logged in successfully.');window.location='adopt.php';</script>";    
        }
        else
            echo "<script> alert('incorrect id or password');window.location='vlogin.html';</script>";
}
else
{echo "<script> alert('Error occured');; </script>";}