
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');

if(isset($_GET['id']))
  { ?>
    <div class="popup popup--icon -question js_question-popup popup--visible">
      <div class="popup__background"></div>
      <div class="popup__content">
        <h3 class="popup__content__title">
          Sure
        </h1>
        <p>Are You Sure To Delete This Record?</p>
        <p>
          <a href="del_attendence.php?id=<?php echo $_GET['id']; ?>" class="button button--success" data-for="js_success-popup">Yes</a>
          <a href="view_attendence.php" class="button button--error" data-for="js_success-popup">No</a>
        </p>
      </div>
    </div>
  <?php } ?>
  <div class="page-wrapper">

    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h3 class="text-primary">View Attendence</h3> </div>
        <div class="col-md-7 align-self-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="ti-home"></i>Home</a></li>
            <li class="breadcrumb-item active">View Attendence</li>
          </ol>
        </div>
      </div>

      <div class="container-fluid">

       <div class="card">
        <div class="card-body">
          <?php if(isset($useroles)){ if(in_array("add_student",$useroles)){ ?> 
            <a href="add_attendence.php"><button class="btn btn-primary">Add Attendence</button></a>
          <?php } } ?>
          <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Registration No</th>
                  <th>Student Name</th>
                  <th>Class Name</th>
                  <th>Subject Name</th>
                  <th>Teacher Name</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                include 'connect.php';
                $sql = "SELECT * FROM `tbl_attendence`";
                $result = $conn->query($sql);
                $i=1;
                while($row = $result->fetch_assoc()) { 
                  /*
                  $sql1 = "SELECT * FROM `tbl_student` WHERE id='".$row['stud_id']."'";
                  $result1=$conn->query($sql1);
                  $row1=$result1->fetch_assoc();

                  $sql2 = "SELECT * FROM `tbl_class` WHERE id='".$row1['classname']."'";
                  $result2=$conn->query($sql2);
                  $row2=$result2->fetch_assoc();
                   */
                  ?>
                  <tr>
                    <td><?php echo $row['stud_id'];; ?></td>
                    <td><?php echo $row['studentname']; ?></td>
                    <td><?php echo $row['classname']; ?></td>
                    <td><?php echo $row['subjectname']; ?></td>
                    <td><?php echo $row['teachername']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                      <?php if(isset($useroles)){  if(in_array("edit_attendence",$useroles)){ ?> 
                        <a href="edit_attendence.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-primary" ><i class="ti-reload"></i></button></a>
                      <?php } } ?>

                      <?php if(isset($useroles)){  if(in_array("delete_attendence",$useroles)){ ?> 
                        <a href="view_attendence.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="ti-trash"></i></button></a>
                      <?php } } ?>
                    </td>
                  </tr>
                  <?php $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <?php include('footer.php');?>
        <link rel="stylesheet" href="popup_style.css">
        <?php if(!empty($_SESSION['success'])) {  ?>
          <div class="popup popup--icon -success js_success-popup popup--visible">
            <div class="popup__background"></div>
            <div class="popup__content">
              <h3 class="popup__content__title">
                Success 
              </h1>
              <p><?php echo $_SESSION['success']; ?></p>
              <p>
                <button class="button button--success" data-for="js_success-popup">Close</button>
              </p>
            </div>
          </div>
          <?php unset($_SESSION["success"]);  
        } ?>
        <?php if(!empty($_SESSION['error'])) {  ?>
          <div class="popup popup--icon -error js_error-popup popup--visible">
            <div class="popup__background"></div>
            <div class="popup__content">
              <h3 class="popup__content__title">
                Error 
              </h3>
              <p><?php echo $_SESSION['error']; ?></p>
              <p>
                <button class="button button--error" data-for="js_error-popup">Close</button>
              </p>
            </div>
          </div>
          <?php unset($_SESSION["error"]);  } ?>
          <script>
            var addButtonTrigger = function addButtonTrigger(el) {
              el.addEventListener('click', function () {
                var popupEl = document.querySelector('.' + el.dataset.for);
                popupEl.classList.toggle('popup--visible');
              });
            };

            Array.from(document.querySelectorAll('button[data-for]')).
            forEach(addButtonTrigger);
          </script>