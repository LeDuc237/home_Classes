 <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                       
                        <div class="form-inline">
                            
                        </div>
                    
                        <div class="form-inline">
                            
                        </div>

                      
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 <?php
$eid=$_SESSION['trmsuid'];
$query=$dbh -> prepare("SELECT * from  tblteacher where ID=$eid");
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $row)
{  
    if($row->Picture==''):?>
    <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex"><?php  echo htmlentities($row->Name);?>Welcome to your dashboard!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto" id="google_translate_element" >Do you want to switch language? </ul>
           

                            <img class="user-avatar rounded-circle" src="images/images.png" alt="User Avatar">
                            <?php else: ?>    
<img src="images/<?php echo $row->Picture;?>" class="user-avatar rounded-circle">
<?php endif;?>
                        </a>
<?php } ?>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="View-profile.php"><i class="fa fa-user"></i>   My Profile</a>

                            

                            <a class="nav-link" href="change-password.php"><i class="fa fa-cog"></i>Change Password</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>
            <script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({
      pageLanguage: 'en',
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
      autoDisplay: false
    }, 'google_translate_element');
  }
</script> 
 

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </header>