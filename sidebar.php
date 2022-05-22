
<?php 
include('connect.php');
$sql = "select * from admin where id = '".$_SESSION["id"]."'";
$result=$conn->query($sql);
$row1=mysqli_fetch_array($result);

$q = "select * from tbl_permission_role where role_id='".$row1['group_id']."'";
$ress=$conn->query($q);

$name = array();
while($row=mysqli_fetch_array($ress)){
  $sql = "select * from tbl_permission where id = '".$row['permission_id']."'";
  $result=$conn->query($sql);
  $row1=mysqli_fetch_array($result);
  array_push($name,$row1[1]);
}
$_SESSION['name']=$name;
$useroles=$_SESSION['name'];
?>

<div class="left-sidebar">
  <div class="scroll-sidebar">
    <nav class="sidebar-nav">
      <ul id="sidebarnav">
        <li class="nav-devider"></li>
        <br>
        <li class="nav-label"><i class="ti-home"></i>Home</li>
        <li><a href="index.php" aria-expanded="false"><i class="ti-dashboard"></i>Dashboard</a></li>

        <?php if(isset($useroles)){  if(in_array("manage_student",$useroles)){ ?> 
         <!-- <li class="nav-label">Student</li> -->
         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="ti-face-smile"></i><span class="hide-menu">Candidate </span></a>
          <ul aria-expanded="false" class="collapse">
            <?php if(isset($useroles)){  if(in_array("add_student",$useroles)){ ?> 
            <li><a href="add_student.php">Add </a></li>  
            <?php } } ?>
            <li><a href="view_student.php">View Candidate</a></li>
          </ul>
        </li>
      <?php } } ?>

      <?php if(isset($useroles)){  if(in_array("manage_class",$useroles)){ ?> 
       <!-- <li class="nav-label">Class</li> -->
       <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="ti-briefcase"></i><span class="hide-menu">Company</span></a>
        <ul aria-expanded="false" class="collapse">
          <?php if(isset($useroles)){  if(in_array("add_class",$useroles)){ ?> 
            <li><a href="add_class.php">Add Company</a></li>
          <?php } } ?>
          <li><a href="view_class.php">View Company</a></li>
        </ul>
      </li>
    <?php } } ?>

    <?php if(isset($useroles)){  if(in_array("manage_subject",$useroles)){ ?> 
     <!-- <li class="nav-label">Subject</li> -->
     <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="ti-blackboard"></i><span class="hide-menu">Job path</span></a>
      <ul aria-expanded="false" class="collapse">
        <?php if(isset($useroles)){  if(in_array("add_subject",$useroles)){ ?> 
          <li><a href="add_subject.php">Add job</a></li>
        <?php } } ?>
        <li><a href="view_subject.php">View job</a></li>
       </ul>
     </li>
    <?php } } ?>

    
   
    

<li class="nav-label">Message</li> 
<li>  <a class="has-arrow" href="#" aria-expanded="false"><i class="ti-receipt"></i><span class="hide-menu">Message</span></a>
  <ul aria-expanded="false" class="collapse">
    <?php if(isset($useroles)){  if(in_array("add_attendence",$useroles)){ ?> 
      <li><a href="Real Works">User message </a></li>
    <?php } } ?>
    
  </ul>
</li>
-->
</ul>   
</nav>

</i>
</div>
</div>    
</div>
