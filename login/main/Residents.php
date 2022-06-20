<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <style>

           .disclaimer{
         display:none;}
      </style>
    <meta charset="utf-8">
    <title>Residents</title>
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
  </head>
  <body>
      <meta charset="UTF-8">
    <title>Barangay Information System</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="../js/morris/morris-0.4.3.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <link href="../css/datatables/dataTablesdark.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/select2.css" rel="stylesheet" type="text/css" />
    <script src="../js/jquery-1.12.3.js" type="text/javascript"></script>
    <style>
    .dark-mode {
  background-color: black;
  color: white;
    }
    body{

  /*background-position: center;*/
  /*background-repeat: no-repeat;*/
  /*background-size: 120% 90%;*/
        background-image:linear-gradient( to bottom,#110B2F, #19103F);
        color:white;
    }
    table,tr,th, td{
        margin:5px;
        padding:5px;
        background-image:radial-gradient(#593F93,#371E72);
        border:1px solid black;
    }


   thead {
  /*     font-size: 20px;*/
  /*     background: -webkit-linear-gradient(#eee, #333);*/
  /*-webkit-background-clip: text;*/
  /*-webkit-text-fill-color: transparent;*/
  margin:5px;
  background-color: #230137;
  color:#FCA315;
}


element.style {
}
.btn.btn-sm {
    font-size: 12px;
}
.btn.btn-primary {

    background-image: linear-gradient(34deg, #EB6910, #FDA814);
    border-color: #053200;
    transition: 0.5s ease;

}


.btn.btn-primary:hover, .btn.btn-primary:active, .btn.btn-primary.hover {
  background-image: linear-gradient(34deg, #FDA814,#EB6910);
  transition: 0.5s ease;
  color: black;
}
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
    z-index: 3;
    color: #fff;
    cursor: default;
     background-image: linear-gradient(34deg, #EB6910, #FDA814);
    border-color:#FDDBC5;
    padding:5px;

}

.dark-mode{

   width:100px;height:100px;
}


.rose{
    position:fixed;
    min-width: 3%;
    max-width:5%;
    left:47%;
    top:70%;

}
.center {
     background-image: url("../assets/rose.png");
  min-height: 100vh;
  background-attachment: fixed;
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: 10%;
    transition:5s ease;
}

.center:hover {
     background-image: url("../assets/rose.png");
  min-height: 100vh;
  background-attachment: fixed;
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: 12%;
  transition:5s ease;
}

    .no-print{
        display:none;
    }
    .dataTables_filter input {
    padding-top: 20px;
    padding-bottom: 20px;}

    .fa fa-search{
      background-color: red;
    }

    @media only screen and (max-width: 600px) {
        #table{
            overflow:scroll;
        }
    h3{
                   position:absolute;
  top: -2.7%;
  left: 8%;
  color:white;
  text-align:center;
  background-image: linear-gradient(to right ,transparent,#333333,#333333, transparent);
  padding: 12.5px 12.5px;
  width: 290px;
    }
    }
    </style>
</head>
<body>








<nav class="navbar navbar-inverse" style="border-radius:0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Residents.php"><img alt="Brand" src="../assets/logo.png" style="width:50px; margin-top:-15px; "></a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../main1/home.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="official_s.php">Officials</a></li>
        <li><a href="../pages/dashboard/dashboard.php">Admin</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="resident.php">Light Mode</a></li>
        <!--<li><a href="#"><button onclick="myFunction()">Toggle dark mode</button></a></li>-->

        <!--<li><a href="../pages/resident/login.php">Resident</a></li>-->
        <!-- <li><a href="../pages/zone/login.php">Zone Leader</a></li> -->
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>






<div class="wrapper row-offcanvas row-offcanvas-left">
<div class="container-fluid">
<table id="table" >
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Barangay</th>
            <th>Zone</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Former Address</th>
            <th style="width: 5% !important;">Option</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "../connection/connection.php";
        $squery = mysqli_query($con, "SELECT *,CONCAT(lname, ', ', fname, ' ', mname) as cname FROM tblresident");
        while($row = mysqli_fetch_array($squery))
        {
            echo '
            <tr>
                <td    style="width:70px;"><image src="../pages/resident/image/'.basename($row['image']).'"  style="width:60px;height:60px; " /></td>
                <td>'.$row['cname'].' '.$row['landOwnershipStatus'].'</td>
                <td>'.$row['barangay'].'</td>
                <td>'.$row['zone'].'</td>
                <td>'.$row['age'].'</td>
                <td>'.$row['gender'].'</td>
                <td>'.$row['formerAddress'].'</td>
                 <td><button class="btn btn-primary btn-sm" data-target="#detailsModal'.$row['id'].'" data-toggle="modal"><i class="fa fa-search" aria-hidden="true"></i> Details</button></td>
            </tr>
            ';
            include "detailsModaldark.php";
        }
        ?>

    </tbody>
</table>


<div class="center"> </div>


</body>


<script src="../js/alert.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>


<script src="../js/morris/raphael-2.1.0.min.js" type="text/javascript"></script>
<script src="../js/morris/morris.js" type="text/javascript"></script>
<script src="../js/select2.full.js" type="text/javascript"></script>

<script src="../js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="../js/buttons.print.min.js" type="text/javascript"></script>

<script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../js/AdminLTE/app.js" type="text/javascript"></script>


<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>



<script type="text/javascript">
  $(function() {
      $("#table").dataTable({
         "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,5 ] } ],"aaSorting": [],
         "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">'
      });
  });

  $(document).ready(function () {
  $('.dataTables_filterinput[type="search"]').css(
     {'width':'350px','display':'inline-block'}
  );
});
</script>



  </body>
</html>
