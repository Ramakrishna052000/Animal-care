<?php
include("conn.php");
extract($_GET);
if(!mysqli_error($con))
{  
    if($type=='1')
    {
        $sql = "insert into volunteer(name,age,gender,pwd) values('$name','$age','$gender','$pwd')";
        mysqli_query($con,$sql);
        $sql ="select max(id) as max from volunteer";
        $res = mysqli_query($con,$sql);
        $val = mysqli_fetch_assoc($res);
        $id =$val['max'];
        echo "<script> alert('added successfully. Your id is $id');window.location='add.html';</script>";
    }
    if($type=='2')
    {
        $sql = "insert into member(name,age,gender,pwd) values('$name','$age','$gender','$pwd')";
        mysqli_query($con,$sql);
        $sql ="select max(id) as max from member";
        $res = mysqli_query($con,$sql);
        $val = mysqli_fetch_assoc($res);
        $id =$val['max'];
        echo "<script> alert('added successfully. Your id is $id');window.location='add.html';</script>";
    }
}
else
{echo "<script> alert('Error occured');; </script>";}