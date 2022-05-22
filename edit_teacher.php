
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php
include('connect.php');
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');

if(isset($_POST["btn_update"]))
{
    extract($_POST);

    $q1="UPDATE `tbl_teacher` SET `tfname`='$tfname',`tlname`='$tlname',`classname`='$classname',`subjectname`='$subjectname',`temail`='$temail',`tgender`='$tgender',`tdob`='$tdob',`tcontact`='$tcontact',`taddress`='$taddress' WHERE `id`='".$_GET['id']."'";

    if ($conn->query($q1) === TRUE) {
        $_SESSION['success']=' Record Successfully Updated';
        ?>
        <script type="text/javascript">
            window.location="view_teacher.php";
        </script>
        <?php
    } else {
        $_SESSION['error']='Something Went Wrong';
        ?>
        <script type="text/javascript">
            window.location="view_teacher.php";
        </script>
        <?php
    }
}
?>
<?php
$que="SELECT * FROM `tbl_teacher` WHERE id='".$_GET["id"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{

    extract($row);
    $fname = $row['tfname'];
    $lname = $row['tlname'];
    $email = $row['classname'];
    $email = $row['subjectname'];
    $email = $row['temail'];
    $gender = $row['tgender'];
    $dob = $row['tdob'];
    $contact = $row['tcontact'];
    $address = $row['taddress'];
}
?> 

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Teacher Management</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Add Teacher Management</li>
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
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" name="teacherform">

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">First Name</label>
                                            <div class="col-sm-9">
                                              <input type="text" name="tfname" class="form-control" placeholder="First Name" id="event" onkeydown="return alphaOnly(event);" value="<?php echo $tfname; ?>" required="">
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text"  name="tlname" id="lname" class="form-control" id="event" onkeydown="return alphaOnly(event);" placeholder="Last Name" value="<?php echo $tlname; ?>" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Class</label>
                                        <div class="col-sm-9">
                                            <select type="text" name="classname" class="form-control"   placeholder="Class" required="">
                                                <option value="">--Select Class--</option>
                                                <?php  
                                                $c1 = "SELECT * FROM `tbl_class`";
                                                $result = $conn->query($c1);

                                                if ($result->num_rows > 0) {
                                                    while ($row = mysqli_fetch_array($result)) {?>
                                                        <option value="<?php echo $row["id"];?>"<?php if($classname==$row["id"]){ echo "Selected";}?>>
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
                                        <label class="col-sm-3 control-label">Subject</label>
                                        <div class="col-sm-9">
                                            <select type="text" name="subjectname" class="form-control"   placeholder="subject" required="">
                                                <option value="">--Select Subject--</option>
                                                <?php  
                                                $c1 = "SELECT * FROM `tbl_subject`";
                                                $result = $conn->query($c1);

                                                if ($result->num_rows > 0) {
                                                    while ($row = mysqli_fetch_array($result)) {?>
                                                        <option value="<?php echo $row["id"];?>"<?php if($subjectname==$row["id"]){ echo "Selected";}?>>
                                                            <?php echo $row['subjectname'];?>
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
                                        <label class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="temail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Email" value="<?php echo $temail; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Gender</label>
                                        <div class="col-sm-9">
                                         <select name="tgender" id="gender" class="form-control" required="">
                                            <option value=" ">--Select Gender--</option>
                                            <option value="Male" <?php if($gender=='Male'){ echo "Selected";}?>>Male</option>
                                            <option value="Female" <?php if($gender=='Female'){ echo "Selected";}?>>Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <label class="col-sm-3 control-label">Date Of Birth</label>
                                <div class="col-sm-9">
                                  <input type="date" name="tdob" value="<?php echo $tdob; ?>" class="form-control" placeholder="Birth Date">
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label">Contact</label>
                            <div class="col-sm-9">
                                <input type="text" name="tcontact" class="form-control" placeholder="Contact Number" id="tbNumbers" minlength="10" maxlength="10" onkeypress="javascript:return isNumber(event)" required="" value="<?php echo $tcontact; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="4" name="taddress" placeholder="Address" style="height: 120px;"><?php echo $taddress;?></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="btn_update" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('footer.php');?>
