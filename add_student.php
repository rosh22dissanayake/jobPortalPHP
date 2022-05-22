
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
            <h3 class="text-primary">Candidate Details</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="ti-home"></i>Home</a></li>>
                    <li class="breadcrumb-item active">Enter details</li>
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
                                <form class="form-horizontal" method="POST" action="pages/save_student.php" name="studentform" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">First Name</label>
                                            <div class="col-sm-9">
                                               <input type="text" name="fname" class="form-control" placeholder="First Name"  minlength="4" maxlength="15"  >
                                           </div>
                                       </div>
                                   </div>

                                   <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="lname" class="form-control" placeholder="Last Name"  >
                                      </div>
                                  </div>
                              </div>

                               <div class="form-group">
                          <div class="row">
                            <label class="col-sm-3 control-label">Date Of Birth</label>
                            <div class="col-sm-9">
                              <input type="date" name="dob" class="form-control" placeholder="Birth Date">
                          </div>
                      </div>
                      </div>
                           
                            <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Age</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="age" class="form-control" placeholder="Age"  >
                                      </div>
                                  </div>
                            </div>

                            

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Gender</label>
                                    <div class="col-sm-9">
                                       <select name="sgender" id="gender" class="form-control" >
                                        <option value="">--Select Gender--</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="semail" class="form-control"   placeholder="Email" >
                                    </div>
                                </div>
                            </div>

                        
                  
                  <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label">Degree </label>
                        <div class="col-sm-9">
                            <input type="text" name="sdegree" class="form-control" placeholder="Degree"  minlength="6" maxlength="70" >
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" name="fcontact" class="form-control" placeholder="Contact number"  minlength="10" maxlength="15"  >
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="4" name="saddress" placeholder="Address" style="height: 120px;"></textarea>
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

