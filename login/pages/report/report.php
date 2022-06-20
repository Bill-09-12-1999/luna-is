<!DOCTYPE html>
<html>
<head>
    
    <style>
        #morris-bar-chart4{
            background-color:#D6F2CC;
        }
         #morris-bar-chart2{
            background-color:#D6F2CC;
        }
         #morris-bar-chart3{
            background-color:#D6F2CC;
        }
        #morris-donut-chart{
            background-color:#F2CB8D;
        }
       rect{
          fill:rgba(77,119,78);
       }
        path{
           /*fill:#4D774E;*/
            fill: url(#MyGradient);
          stroke: #164A41;
  stroke-width: 1;
  stroke-linecap: butt;
  stroke-dasharray: 0;
        }
       
    </style>
    
  
    
    
    
</head>
    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../main1.home.php"); 
    }
    else
    {
    ob_start();
    include('../head_css.php'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "connection.php";
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
                        Reports
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                    <form action="export.php" method="post">
                                        <button class="btn btn-primary btn-sm" type="submit" name="export"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Export</button>  
                                    </form>
                                    </div>                            
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                
                                <div class="row">                     
                                    <div class="col-md-12 col-sm-12 col-xs-12">                     
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Resident Income Level
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-bar-chart4" ></div>
                                            </div>
                                        </div>          
                                    </div>   
                                    <div class="col-md-6 col-sm-12 col-xs-12">                     
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                               Resident Educational Attainment
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-donut-chart"></div>
                                            </div>
                                        </div>            
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">                     
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                               Population per Zone
                                            </div>
                                            <div class="panel-body">
                                                <div id="morris-bar-chart3"></div>
                                            </div>
                                        </div>            
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">                     
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Age
                                        </div>
                                        <div class="panel-body">
                                            <div id="morris-bar-chart2"></div>
                                        </div>
                                    </div>            
                                </div> 


                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            


                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php }
        include "../footer.php"; 

        include "donut-chart.php";
        include "bar-chart.php"; 
        ?>
         <?php include "../internetcheck.php"; ?>

 <svg id="ddd" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <style type="text/css">
      
        path{fill:url(#MyGradient)}
      </style>
      <defs>
        <linearGradient id="MyGradient">
          <stop offset="5%" stop-color="#F60" />
          <stop offset="95%" stop-color="#FF6" />
        </linearGradient>
      </defs>
      
      <rect width="0" height="0"/>
    </svg>

    </body>
</html>
