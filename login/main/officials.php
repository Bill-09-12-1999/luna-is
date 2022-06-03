

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Officials</title>
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

    <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/select2.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="../css/officials.css">
    <script src="../js/jquery-1.12.3.js" type="text/javascript"></script>
    <style>
    .no-print{
        display:none;
    }
    .dataTables_filter input {
    padding-top: 20px;
    padding-bottom: 20px;}

    .fa fa-search{
      background-color: red;
    }
      h3{
           position:absolute;
  top: -2.7%;
  left: 81%;
  color:white;
  text-align:center;
  background-image: linear-gradient(to right ,transparent,#333333,#333333,#333333, #337ab7);
  padding: 12.5px 12.5px;
  width: 300px;
      }
::-webkit-scrollbar{
    width:15px;
  
}

::-webkit-scrollbar-thumb{
    width:10px;
    background-image: linear-gradient(to bottom, #09170E,#2E5221,#09170E);
    border-radius:5px;
}
::-webkit-scrollbar-thumb:hover{
    width:10px;
    background-image: linear-gradient(to bottom, #09170E,#2E5221,#A2CD8F,#2E5221,#09170E);
    transition: 1s ease;
    border-radius:5px;
}
/*#progress{*/
/*    position:fixed;*/
/*    top:0;*/
/*    right:0;*/
/*    height:100%;*/
/*    border-radius:5px;*/
/*    background-image: linear-gradient(to top, #09170E,#2E5221,#4A6D39,#568C3C,#689D4F,#A2CD8F);*/
/*}*/
      
@media only screen and (max-width: 600px) {
    h3{
                   position:absolute;
  top: -2.7%;
  left: 8%;
  color:white;
  text-align:center;
  background-image: linear-gradient(to right ,transparent,#333333,#333333, transparent);
  padding: 12.5px 12.5px;
  width: 300px;
    }
    
    .profile_card1 {
    /* background-color: transparent; */
    display: none;
    width: 400px;
    height: 300px;
    margin: 20px 10px 10px 10px;
}

.text {
    position: relative;
    font-size: 20px;
    line-height: 50px;
    text-align: center;
    padding: 10px 10px;
    margin: 20px;
    margin-left: 10px;
    width: 95%;
    font-family: 'Kaushan Script', cursive;
    font-weight: 500;
    height: 50px;
    color: white;
}
    
    .row{
  width: 100%;
  margin: auto;
  display:flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  justify-items:center;
  padding: 10px;
  background-image: url(../assets/leaf-pattern.png);
  background-position: center;
  background-repeat: no-repeat;
  background-size: 120% 90%;
overflow: hidden;
}

    }
    </style>
</head>
<body>





<div id="progress"></div>

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
      <a class="navbar-brand" href="residents.php"><img alt="Brand" src="../assets/logo.png" style="width:50px; margin-top:-15px; "></a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../loginpage.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="residents.php">Residents</a></li>
        <li><a href="../loginpage.php">Admin</a></li>
        <li><a href="../about.php">About</a></li>
        <!--<li><a href="../pages/resident/login.php">Resident</a></li>-->
        <!-- <li><a href="../pages/zone/login.php">Zone Leader</a></li> -->
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div>
  <h3> Officials</h3>
</div>


<div class="off_profiles">

  <div class="off_container">
      <div class="text">
Barangay Luna Officials
      </div>




      <div class="row">
        <div class="profile_card1">
          <div class="profile_content">
            <div class="profile_image">
              <!-- <img src="../assets/bg2.jpg" alt="first user" class="img"> -->

            </div>
<div class="desc">
  <!-- <h2>Position</h2> -->
  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->

</div>
          </div>

        </div>
<!-- kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk -->
<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 1");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 1");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>
<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm -->


<div class="profile_card1">
  <div class="profile_content">
    <div class="profile_image">


    </div>
<div class="desc">
<h2></h2>
<p></p>

</div>
  </div>

</div>
<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm -->
<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 2");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 2");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>
<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm -->


<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 3");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 3");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>




<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 4");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 4");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>
<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm -->
<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 5");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 5");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>





<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 6");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 6");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>








<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 7");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 7");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>






<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 8");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 8");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>





<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 9");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 9");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>






<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 10");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 10");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>





<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 11");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 11");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>





<?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image WHERE tbl_image_id = 12");
while($row = mysqli_fetch_array($squery))
echo'
<div class="profile_card">
  <div class="profile_content">
    <div class="profile_image">
     <img src="../pages/update-image/uploads/'.$row['image_location'].'" alt="first user" class="img">
    </div> ';
    ?>
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tblofficial WHERE id = 12");
while($row = mysqli_fetch_array($squery))

    echo '
<div class="desc">
<h2>'.$row['sPosition'].'</h2>
<p>'.$row['completeName'].'</p>
<p>'.$row['paddress'].'</p>
<p>'.$row['pcontact'].'</p> '; ?>
</div>
  </div>

</div>
      </div>

  </div>



</div>

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

<script type="text/javascript">
  $(window).scroll(function(){
      var scroll = $(window).scrollTop(),
      dh =$(document).height(),
      wh = $(window).height;
      scrollPercent = (scroll /(dh-wh))*100;
      $('#scrollbar').css('height', scrollPercent + '%');
  })
 
</script>

  </body>
</html>
