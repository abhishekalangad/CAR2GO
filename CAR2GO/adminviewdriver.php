<?php
// session_start();
include 'db_connect.php';
include 'aheader.php';
// if(isset($_SESSION['l_id']))
// {
//   $l_id =$_SESSION['l_id'];
//   //var_dump($l_id);


// }
?>

<!-- our blog -->
<section class="blog" id="blog">
   <div class="container">
      <div class="heading">
         <h3> Driver booking history </h3>
      </div>
      <div class="blog-grids" style="height: 500px;">
 <?php

 $s="SELECT * FROM bookdriver  ";
//var_dump($s);i
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
   $d_id=$row['d_id'];
  $dd_id=$row['dd_id'];
  $dr_id=$row['dr_id'];
  $d_day1=$row['d_day1'];
  $d_day2=$row['d_day2'];
  $d_status=$row['d_status'];


 //   $licence=$row['s_licence'];
 //  $name=$row['s_name'];
 // $email=$row['s_email'];
 //  $password=$row['s_password'];
 //  $address=$row['s_address'];
 //   // $city=$row['d_city'];
 //   // $state=$row['d_state'];
 //   $phone=$row['s_phone'];
 //   $pincode=$row['s_pincode'];
 //   $rc=$row['s_rc'];
 
 //  $approve=$row['l_approve'];


     $s1="SELECT * FROM user_reg  WHERE ul_id ='$dr_id' ";  
//var_dump($s);i
      if(!$stmt1=mysqli_query($con,$s1))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row1=mysqli_fetch_array($stmt1))
       {
        
     $rname=$row1['u_name'];

}

 $s2="SELECT * FROM  driver_reg WHERE dl_id ='$dd_id'  "; 
//var_dump($s);i
      if(!$stmt2=mysqli_query($con,$s2))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row2=mysqli_fetch_array($stmt2))
       {
      
   $oname=$row2['d_name'];
}



                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         <!-- <a href="images/<?php echo $licence;?>" ><img src="images/<?php echo $licence;?>" alt="" /></a> -->
         <h5></h5>
         <!-- <h4><a href="images/<?php echo $licence;?>">Rc</a></h4> -->
         <p> Requesting user :<?php echo $rname;?></p>
         <!-- <p> Requesting car :<?php echo $name;?></p> -->
         <p>Requesting driver  :<?php echo $oname;?></p>
         <p> Starting date :<?php echo $d_day1;?></p>
         <p> Ending date :<?php echo $d_day2;?></p>
         <p> Status :<?php echo $d_status;?></p>

         <!-- <p>Email : <?php echo $email;?></p>
         <p>Address : <?php echo $address;?></p>
         <p>Phone : <?php echo $phone;?></p>
         <p>Pincode : <?php echo $pincode;?></p>
          <p>Status :<?php echo $approve;?></p> -->
                                
                                    
         <div class="readmore-w3">
            <!-- <a class="readmore" href="#" data-toggle="modal" data-target="#myModal">Read More</a> -->
               <!--  <?php
                                    if($approve=='approve')
                                    {
                                    ?>
                                   <a href="disser.php?sl_id=<?php echo $sl_id;?>"><button class="btn btn-danger">Disapprove</button></a>
                                    <?php
                                  }
                                  else
                                  {
                                    ?>
                                   <a href="appser.php?sl_id=<?php echo $sl_id;?>"><button class="btn btn-success">Approve</button></a>
                                    <?php
                                  }
                                  ?> -->
                                    
                                 <!--    <a href="deleteser.php?sl_id=<?php echo $sl_id;?>"><button  class="btn btn-primary">Delete</button></a> -->
         </div>
      </div>
 <?php
}
?>
      <div class="clearfix"></div>
      </div>
   </div>
</section>
<!-- //our blog -->
<?php

include 'footer.php';
?>



 <!-- //   $licence=$row['s_licence'];
 //  $name=$row['s_name'];
 // $email=$row['s_email'];
 //  $password=$row['s_password'];
 //  $address=$row['s_address'];
 //   // $city=$row['d_city'];
 //   // $state=$row['d_state'];
 //   $phone=$row['s_phone'];
 //   $pincode=$row['s_pincode'];
 //   $rc=$row['s_rc'];
 
 //  $approve=$row['l_approve'];
 -->