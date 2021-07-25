<?php
include("conn.php");
extract($_GET);
if(!mysqli_error($con))
{
    $sql = "insert into appointment(name,age,gender,no,address,date,animalid) values('$name','$age','$gender','$no','$add','$date','$id')";
    mysqli_query($con,$sql);
    $sql ="select max(id) as max from appointment";
    $res = mysqli_query($con,$sql);
    $val = mysqli_fetch_assoc($res);
    $id2 =$val['max'];
    echo "<script> alert('Appointment booked successfully. We will be waiting for you');window.location='index.html'</script>";
}
else
{echo "<script> alert('Error occured');; </script>";}