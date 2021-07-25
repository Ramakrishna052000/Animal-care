<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<div class="row" style="margin:10;padding:10">
  <div class="col" style="width:30%;">
    <div class="card"style="height: 500">
      <img src="<?php echo($val['img']);?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">id:<?php echo($val['id']);?> name:<?php echo($val['name']);?></h5>
        <p class="card-text">type:<?php echo($val['type']);?></p>
                        <hr>
                        <p class="card-text">age:<?php echo($val['age']);?></p>
                        <hr>
                        <p class="card-text">availability:<?php if($val['status']==1)echo ('available');else echo('adopted');?></p>
      </div>
    </div>
 </div>
<div class="col" style="width:30%;">
    <div class="card" style="height: 500">
      <img src="<?php echo($val['img']);?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">id:<?php echo($val['id']);?> name:<?php echo($val['name']);?></h5>
        <p class="card-text">type:<?php echo($val['type']);?></p>
                        <hr>
                        <p class="card-text">age:<?php echo($val['age']);?></p>
                        <hr>
                        <p class="card-text">availability:<?php if($val['status']==1)echo ('available');else echo('adopted');?></p>
      </div>
    </div>
 </div>
<div class="col" style="width:30%;">
    <div class="card"style="height: 500">
      <img src="<?php echo($val['img']);?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">id:<?php echo($val['id']);?> name:<?php echo($val['name']);?></h5>
        <p class="card-text">type:<?php echo($val['type']);?></p>
                        <hr>
                        <p class="card-text">age:<?php echo($val['age']);?></p>
                        <hr>
                        <p class="card-text">availability:<?php if($val['status']==1)echo ('available');else echo('adopted');?></p>
      </div>
    </div>
 </div>
</div>
<div class="col-sm-6" style="margin: 20;padding :20">            
            <div class="card" style='width: 45%;height: 500' >
                    <img src="<?php echo($val['img']);?>" class="card-img-top">
                    <div class="card_body">
                        <h5 class="card-title">id:<?php echo($val['id']);?> name:<?php echo($val['name']);?></h5>
                        <p class="card-text">type:<?php echo($val['type']);?></p>
                        <hr>
                        <p class="card-text">age:<?php echo($val['age']);?></p>
                        <hr>
                        <p class="card-text">availability:<?php if($val['status']==1)echo ('available');else echo('adopted');?></p>
                    </div>    
            </div>
        </div>  