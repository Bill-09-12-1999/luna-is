<!DOCTYPE html>
<html>

    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../main1/home.php");
    }
    else if($_SESSION['role'] != "Administrator")
    {
        header("Location: ../../main1/home.php"); 
    }
    else
    {
    ob_start();
    include('../head_css.php'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php

        include "../connection.php";
        ?>
        <?php include('../header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">

            <!-- Left side column. contains the logo and sidebar -->
            <?php include('../sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <!-- left column -->
                            <div class="box">

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>

                                  <div class="info-box">

                                    <a href="../household/household.php"><span class="info-box-icon bg-aqua"><i class="fa fa-home"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Households</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tblhousehold");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Residents</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tblresident");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../clearance/clearance.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Clearances</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tblclearance where status = 'Approved' ");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../permit/permit.php"><span class="info-box-icon bg-aqua"><i class="fa fa-file"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Permits</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tblpermit where status = 'Approved' ");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

 <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><img src="../../assets/male.png" style="width:90px; height:auto;"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Male</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tblresident WHERE gender = 'male'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>


                                 <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><img src="../../assets/female.png" style="width:90px; height:auto;"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Female</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * from tblresident WHERE gender = 'female'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

<div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><img src="../../assets/minor.png" style="width:80px; height:auto;"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Minor</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * FROM `tblresident` WHERE `age` < 18");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>


                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><img src="../../assets/senior.png" style="width:80px; height:auto;"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Senior</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * FROM `tblresident` WHERE `age` > 60");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>

  <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../activity/activity.php"><span class="info-box-icon bg-aqua"><i class="fa fa-calendar"></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Activity</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * FROM `tblactivity` ");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>


                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><img src="../../assets/voter.png" style="width:100px; height:auto; position:relative; top:-5px;""></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Voter</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * FROM `tblresident` WHERE `voter`='Yes'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>


                                <div class="col-md-3 col-sm-6 col-xs-12"><br>
                                  <div class="info-box">
                                    <a href="../resident/resident.php"><span class="info-box-icon bg-aqua"><img src="../../assets/nonvoter.png" style="width:100px; height:auto; position:relative; top:-5px;""></i></span></a>

                                    <div class="info-box-content">
                                      <span class="info-box-text">Non-Voter</span>
                                      <span class="info-box-number">
                                        <?php
                                            $q = mysqli_query($con,"SELECT * FROM `tblresident` WHERE `voter`='No'");
                                            $num_rows = mysqli_num_rows($q);
                                            echo $num_rows;
                                        ?>
                                      </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>












                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                            </div><!-- /.box -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
         <?php include "../internetcheck.php"; ?>
        <?php }
        include "../footer.php"; ?>
<script type="text/javascript">
    $(function() {
        $("#table").dataTable({
           "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": []
        });
    });
</script>

    </body>
</html>
