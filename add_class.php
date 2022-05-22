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
            <h3 class="text-primary">Company Details</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php"><i class="ti-home"></i>Home</a></li>>
                    <li class="breadcrumb-item active">Enter Details</li>
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
                                <form class="form-horizontal" method="POST" action="pages/save_class.php" name="studentform" enctype="multipart/form-data">

                                    

                                   <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Company Name</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="cname" class="form-control" placeholder="Company Name"  >
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Qualification</label>
                                    <div class="col-sm-9">
                                       <select name="qualification" id="gender" class="form-control" >
                                        <option value="">--Select qualification--</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Degree">Degree</option>
                                        <option value="Master">Master</option>
                                        <option value="PhD">PhD</option>
                                        <option value="Other">Other</option>
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Job Category</label>
                                    <div class="col-sm-9">
                                       <select name="job" id="gender" class="form-control" >
                                        <option value="">--Select job category--</option>
                                        <option value="Software Engineering">Software Engineering</option>
                                        <option value="Network Engineering">Network Engineering</option>
                                        <option value="Project Managers">Project Managers</option>
                                        <option value="QA Engineering">QA Engineering</option>
                                        <option value="Business Analysts">Business Analysts</option>
                                        <option value="Database Administrator">Database Administrator</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                           
                            
                            <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Number of vacancies</label>
                                        <div class="col-sm-9">
                                          <input type="text" name="vacancy" class="form-control" placeholder="Nu of Vaccancies"  >
                                      </div>
                                  </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 control-label">Contact</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="contact" class="form-control"  minlength="10" maxlength="15" placeholder="Contact" >
                                    </div>
                                </div>
                            </div>


                           
 

                  <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label"> Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" placeholder="Email address"  minlength="5" maxlength="100" >
                        </div>
                    </div>
                </div>

                
                
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="4" name="address" placeholder="Address" style="height: 120px;"></textarea>
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
