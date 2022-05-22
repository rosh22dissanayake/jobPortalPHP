<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>   
<?php
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');

$sql_currency = "select * from manage_website"; 
$result_currency = $conn->query($sql_currency);
$row_currency = mysqli_fetch_array($result_currency);
?>   
<link rel="shortcut icon" href="uploadImage/Profile/UoVT.jpg"> 
<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-primary p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-face-smile f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <?php $sql="SELECT COUNT(*) FROM `tbl_student`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?> 
                                <h2 class="color-white"><?php echo $row[0];?></h2>
                                <p class="m-b-0">Candidates</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-pink p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-user f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <?php $sql="SELECT COUNT(*) FROM `tbl_class`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?>
                                <h2 class="color-white"><?php echo $row[0];?></h2>
                                <p class="m-b-0">Companies</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-danger p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-bag f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <?php $sql="SELECT COUNT(*) FROM `tbl_subject`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?>
                                <h2 class="color-white"><?php echo $row[0];?></h2>
                                <p class="m-b-0">Jobs</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning p-20">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-comment f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                               <?php $sql="SELECT COUNT(*) FROM `tbl_subject`";
                               $res = $conn->query($sql);
                               $row=mysqli_fetch_array($res);?> 
                               <h2 class="color-white"><?php echo $row[0];?></h2>
                               <p class="m-b-0">Messages</p>
                           </div>
                       </div>
                   </div>
               </div>
               

      </div>
  </div>
  <?php include('footer.php');?>