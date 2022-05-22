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
      <h3 class="text-primary">Job category</h3> </div>
      <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="ti-home"></i>Home</a></li>
          <li class="breadcrumb-item active">Add job</li>
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
                <form class="form-horizontal" method="POST" action="pages/save_subjects.php" name="userform" enctype="multipart/form-data">

                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-3 control-label">Company Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="com_name" class="form-control" placeholder="Company name" id="event"  required="">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-3 control-label">Job Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="jname" class="form-control" placeholder="Job name" id="event" onkeydown="return alpha(event);" required="">
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
