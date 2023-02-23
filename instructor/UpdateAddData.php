<!DOCTYPE html>
<html>
  <head><link rel="stylesheet" type="text/css" href="style.css"></head>
  <body>

<?php
  include 'connectdb.php';?>
  <a href="PoolofInstructor.php"><?php
  if (isset ($_POST['insert']))
  {
    $id=$_POST['id'];
    $acc_id=$_POST['acc_id'];
    $rank=$_POST['rank'];
    $quadeg=$_POST['quadeg'];
    $couspe=$_POST['couspe'];
    $othqua=$_POST['othqua'];
    $query= "INSERT INTO `pool_instructor_details`(`instructor_id`, `account_id`, `rank`, `qualification_degree`, `course_specialization`, `other_qualification`) 
    VALUES ('$id','$acc_id','$rank','$quadeg','$couspe','$othqua')";
    $result = mysqli_query($conn,$query)   ?>  
    <div>
    <button class="button4">Done</button>
    <p class="addsucc ">Added Successfully!</p>
</div><?php
  }?>
  
</a>

  <a href="PoolofInstructor.php"><?php
  if (isset ($_POST['update']))
  {
    $id=$_POST['instrucid']; 
    $accid=$_POST['accid']; 
    $rank=$_POST['rank'];
    $quadeg=$_POST['quadeg'];
    $couspe=$_POST['couspe'];
    $othqua=$_POST['othqua'];

    $query= "UPDATE `pool_instructor_details` SET `instructor_id`='$id', `rank`='$rank',`qualification_degree`='$quadeg',`course_specialization`='$couspe',`other_qualification`='$othqua' WHERE `account_id`='$accid'";
     $result = mysqli_query($conn,$query);?>
     <div>
     <button class="button2">Done</button>
     <p class="upsucc ">Updated Successfully!</p>
 </div><?php
}
?>


</a>

  </body>
</html>
