<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php
include('connect.php');
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');

?>

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Attendence Management</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Add Attendence Management</li>
                </ol>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8" style="    margin-left: 10%;">
                    <div class="card">
                        <div class="card-title">
                        </div>
                        <div class="card-body">
                            <div class="input-states">
                                <form class="form-horizontal" method="POST" action="pages/save_attendence.php" name="attendenceform" enctype="multipart/form-data">
                                   
                            <div class="form-group">
                             <div class="row">
                                    <label class="col-sm-3 control-label">Registration No</label>
                                    <div class="col-sm-9">
                                     <input type="text" name="stud_id" class="form-control" placeholder="Registration No" id="tbNumbers" minlength="4" maxlength="15" onkeypress="javascript:return isNumber(event);" required="">
                                 </div>
                             </div>
                            </div>
                                 
                            <div class="form-group">
                                <div class="row">
                                  <label class="col-sm-3 control-label">Student Name</label>
                                  <div class="col-sm-9">
                                    <select type="text" name="studentname" class="form-control"   placeholder="Student Name" required="">
                                        
                                        <?php  
                                        $c1 = "SELECT id,sfname,slname FROM `tbl_student`";
                                        $result = $conn->query($c1);

                                        if ($result->num_rows > 0) {
                                            while ($row = mysqli_fetch_array($result)) {?>
                                                <option value="<?php echo $row['sfname']."".$row['slname'];?>">
                                                    <?php echo $row['sfname']." ".$row['slname'];?>
                                                </option>
                                                <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                              <label class="col-sm-3 control-label">Class Name</label>
                              <div class="col-sm-9">
                                <select type="text" name="classname" class="form-control"   placeholder="Class" required="">
                                    <option value="">--Select Class Name--</option>
                                    <?php  
                                    $c1 = "SELECT * FROM `tbl_class`";
                                    $result = $conn->query($c1);

                                    if ($result->num_rows > 1) {
                                        while ($row = mysqli_fetch_array($result)) {?>
                                            <option value="<?php echo $row["classname"];?>">
                                                <?php echo $row['classname'];?>
                                            </option>
                                            <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                          <label class="col-sm-3 control-label">Subject Name</label>
                          <div class="col-sm-9">
                            <select type="text" name="subjectname" class="form-control"   placeholder="Subject" required="">
                                <option value="">--Select Subject Name--</option>
                                <?php  
                                $c1 = "SELECT id,subjectname FROM `tbl_subject`";
                                $result = $conn->query($c1);

                                if ($result->num_rows > 1) {
                                    while ($row = mysqli_fetch_array($result)) {?>
                                        <option value="<?php echo $row["subjectname"];?>">
                                            <?php echo $row['subjectname'];?>
                                        </option>
                                        <?php
                                    }
                                } else {
                                    echo "1 results";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                      <label class="col-sm-3 control-label">Teacher Name</label>
                      <div class="col-sm-9">
                        <select type="text" name="teachername" class="form-control"   placeholder="Teacher" required="">
                            <option value="">--Select Teacher Name--</option>
                            <?php  
                            $c1 = "SELECT * FROM `tbl_teacher`"; 
                            $result = $conn->query($c1);

                            if ($result->num_rows > 1) {
                                while ($row = mysqli_fetch_array($result)) {?>
                                    <option value="<?php echo $row['tfname']."".$row['tlname'];?>">
                                        <?php echo $row['tfname']." ".$row['tlname'];?>
                                    </option>
                                    <?php
                                }
                            } else {
                                echo "1 results";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
              <div class="row">
                <label class="col-sm-3 control-label">Date</label>
                <div class="col-sm-9">
                  <input type="date" name="date" class="form-control" placeholder="Date">
              </div>
          </div>
      </div>

      <div class="form-group">
        <div class="row">
            <label class="col-sm-3 control-label">Status</label>
            <div class="col-sm-9">
                <select type="text" name="status" class="form-control"   placeholder="Status" required="">
                    <option value="">--Select Status--</option>
                    <option value="Present">Present</option> 
                    <option value="Absent">Absent</option>    
                </select>
            </div>
        </div>
    </div>
    <button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
</div>
</div>
</div>
</div>
</div>
<?php include('footer.php');?>

