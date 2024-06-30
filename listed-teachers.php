<?php include_once('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SmartGen || Teachers</title>
        <!-- Favicon-->
        <link rel="icon" href="../Large.png">
        
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
 <?php include_once('includes/header.php');?>
            <!-- Header-->


            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <form method="post" action="search-result.php">
   <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-5 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">Search Teacher by Subject or location</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Search Teacher by Subject or location" aria-label="Email address..." aria-describedby="button-newsletter" name="searchinput" required style="width:350px;" />
                                    <button class="btn btn-outline-light" id="button-newsletter" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                    </aside>
                </form>
                    <hr />
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <marquee><h2 class="fw-bolder">Listed Teachers</h2></marquee>
<hr color="red" />
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                                    <?php
$sql="SELECT * from tblteacher where isPublic='Yes'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>  

<div class="col-lg-4 mb-5">
    <div class="card h-90 shadow border-0">
        <div class="rounded-circle overflow-hidden mx-auto mt-5" style="width: 300px; height: 350px;">
            <img class="card-img-top" src="teacher/images/<?php echo $row->Picture;?>" alt="<?php echo htmlentities($row->Name);?>" />
        </div>
        <div class="card-body p-4">
            <h4><div class="badge bg-primary bg-gradient rounded-pill mb-2"><?php echo htmlentities($row->TeacherSub);?></div></h4>
            <a class="text-decoration-none link-dark stretched-link" href="teacher-details.php?tid=<?php echo $row->ID;?>">
                <h5 class="card-title mb-3"><?php echo htmlentities($row->Name);?></h5>
            </a>
            <h6 class="card-title mb-3"><small>Generally located at:</small> <?php echo htmlentities($row->TeachAddress);?></h6>
        </div>
    </div>
</div>
<?php }} else{?>
<h3 align="center" style="color:red;">Record not Found</h3>
<?php } ?>
                 
                    </div>
                    <!-- Call to action-->
             
                </div>
            </section>
        </main>
        <!-- Footer-->
<?php include_once('includes/footer.php'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
