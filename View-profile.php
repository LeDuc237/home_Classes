<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['trmsuid']==0)) {
  header('location:logout.php');
  }  else {
     ?>
  
<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <title>SmartGen ||  View Teacher </title>

   <link rel ="icon" href = "../../Large.png">

    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>


<body>


    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <?php include_once('includes/header.php');?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>View Teacher Detail</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                       <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="profile-edit.php">Edit Teacher</a></li>
                            <li><a href="View-profile.php">view Teacher</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header1">
                                <!-- <strong class="card-title">View Teacher</strong> -->
                            <div class="card-body">

                            </div>
                            <?php
                            $tid =$_SESSION['trmsuid'];
                            $sql = "SELECT *
                            FROM tblteacher
                            WHERE tblteacher.ID = $tid";
                            
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $result = $query->fetch(PDO::FETCH_OBJ);
                            
                            if ($result) {
                            ?>
                      <div class="card-header"><center><marquee><strong><h3><?php echo htmlentities($result->Name);?>'s </strong><small>  Details</h3></small></marquee></center></div>   
                            <div class="col-lg-20  mb-9 card-body">
                    <style>
    .left-div {
        float: left;
        width: 50%;
        padding-right: 60px;
    }

    .right-div {
        float: right;
        width: 50%;
    }

    .card-header{
      border:solid 1px;
      background-color: #fff;
    }
</style>

<div class="col-lg-28 mb-12">
    <div class="left-div">
        <div class="card h-80 shadow border-0">
            <div class="rounded-circle overflow-hidden mx-auto mt-5" style="width: 50%; height: 50%;">
                <img class="card-img-top" src="../teacher/images/<?php echo $result->Picture;?>" alt="<?php echo htmlentities($result->Name);?>" />
            </div>
            <div class="card-body p-4">
                <h7 class="card-title mb-3"><strong>Teacher Name: </strong>&nbsp;&nbsp;<u><?php echo htmlentities($result->Name);?></u></h7><br>
                <h7><strong>Main Subject: </strong>&nbsp;&nbsp;<div class="badge bg-primary bg-gradient rounded-pill mb-2"><h7> <u><?php echo htmlentities($result->TeacherSub);?></u></h7></div></h7><br>
                <h7 class="card-title mb-3"><strong>Address: </strong>&nbsp;&nbsp;&nbsp;<u><?php echo htmlentities($result->TeachAddress);?></u></h7><br>
                <h7 class="card-title mb-3"><strong>Mobile Number: </strong>&nbsp;&nbsp;<u><td><a href="https://wa.me/<?php echo htmlentities($row->MobileNumber); ?>" target="_blank"><i class="icon-whatsapp" aria-hidden="true"><?php echo htmlentities($row->MobileNumber); ?></i></a></td></u></h7><br>
                <h7 class="card-title mb-3"><strong>Teaching Experience: </strong>&nbsp;&nbsp;<u><?php echo htmlentities($result->teachingExp);?><small>Years </small></u></h7><br>
                <h7 class="card-title mb-3"><strong>Contact US: </strong>&nbsp;&nbsp;&nbsp;<u><?php echo htmlentities($result->ContactUs);?></u></h7><br>
            </div>
        </div>
    </div>

    <div class="right-div">
        <div class="card h-90 shadow border-0 p-4">
            <h7 class="card-title mb-3"><strong>Qualifications: </strong>&nbsp;&nbsp;&nbsp;<u><?php echo htmlentities($result->Qualifications);?></u></h7>
            <h7 class="card-title mb-3"><strong>Description: </strong>&nbsp;&nbsp;<u><?php echo htmlentities($result->description);?></u></h7>
            <h7 class="card-title mb-3"><strong>IsPublic: </strong>&nbsp;&nbsp;&nbsp;<u><?php echo htmlentities($result->isPublic);?></u></h7>
            <h7 class="card-title mb-3"><strong>JoiningDate: </strong>&nbsp;&nbsp;&nbsp;<u><?php echo htmlentities($result->JoiningDate);?></u></h7>
            <h7 class="card-title mb-3"><strong>Admission Date: </strong>&nbsp;&nbsp;&nbsp;<u><?php echo htmlentities($result->RegDate);?></u></h7> <br><br>
            </div>
    </div>
</div>

</div>
         
</div>
                      </div>  

                      <div class="card-header"><center><marquee><strong><h3><?php echo htmlentities($result->Name);?>'s  Students </strong><small>  Details</h3></small></marquee></center></div>
            <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">S.No</th>
                            <th class="font-weight-bold">Name</th>
                            <th class="font-weight-bold">Guardian's Name</th>
                            <th class="font-weight-bold">Address</th>
                            <th class="font-weight-bold">Date of payement</th>
                            <th class="font-weight-bold">number of days(number of hours)</th>
                            <th class="font-weight-bold">Amount</th>
                          </tr>
                        </thead>
                        <tbody>   
                        <?php 
$sql2 = "SELECT *
         FROM tblstudent 
         WHERE StudentTeacher = $tid";
                         
$query = $dbh->prepare($sql2);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

$cnt = 1;
if ($query->rowCount() > 0) {
  foreach ($results as $row) {

                            ?>
                
        <tr>
            <td><?php echo htmlentities($cnt); ?></td>
            <td><?php echo htmlentities($row->StudentName); ?></td>
            <td><?php echo htmlentities($row->MotherName); ?></td>
            <td><?php echo htmlentities($row->Address); ?></td>
            <td><?php echo htmlentities($row->DateOfPayement); ?></td>
            <td><?php echo htmlentities($row->NumberOfDay); ?></td>
            <td><?php echo htmlentities($row->AmountToPay); ?></td>
        </tr>
<?php 
$total += $row->AmountToPay;

        $cnt = $cnt + 1;
    }
    
}
?>
<div class=""><center><strong><h3>TOTAL AMOUNT : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo htmlentities($total != null ? $total : '0');?>FCFA</h3></strong></center></div>
</table>
                 <?php } ?>     
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <script  src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
<script type="text/javascript">
    $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>
</body>

</html>
<?php }  ?>