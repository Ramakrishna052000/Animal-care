<?php
include("conn.php");
extract($_GET);
if(!mysqli_error($con))
{
    $sql = "insert into daycarereq(name,age,gender,type,fromd,fromt,tod,tot,instructions) values('$name','$age','$gender','$type','$fromdate','$fromtime','$todate','$totime','$instructions')";
    mysqli_query($con,$sql);
    $sql ="select max(id) as max from daycarereq";
    $res = mysqli_query($con,$sql);
    $val = mysqli_fetch_assoc($res);
    $id2 =$val['max'];
    echo $id2;
    echo "<script> alert('Resuested successfully. Your id is $id2. Please track in the track-daycare tab.');window.location='track.html'</script>";
}
else
{echo "<script> alert('Error occured');; </script>";}