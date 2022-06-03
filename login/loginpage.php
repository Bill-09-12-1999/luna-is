<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
/*.container {*/
/*  position: relative;*/
/*  top:32.5%;*/
/*  left:10%;*/
/*  width: 7%;*/
/*  height:auto;*/
/*}*/

/*.image {*/
/* display:none;*/
/*  width: 100%;*/
/*  height: auto;*/
/*}*/

/*.overlay {*/
/*  position: absolute;*/

/*  top: 0;*/
/*  bottom: 0;*/
/*  left: 0;*/
/*  right: 0;*/
/*  height: 90%;*/
/*  width: 90%;*/
/*  opacity: 0;*/
/*  transition: .9s ease;*/
/*  background-color: transparent;*/
/*}*/

/*.container:hover .overlay {*/
/*  opacity: 1;*/
/*}*/

/*.text {*/
/*  position: absolute;*/
/* width: 80%;*/
/*  height: auto;*/
/*  top: 60%;*/
/*  left: -105%;*/

/*  text-align: center;*/
/*}*/



/*.container1 {*/
/*  position: relative;*/
/*  top:33.3%;*/
/*  left:31.5%;*/
/*  width: 10%;*/
/*  height:auto;*/
/*}*/

/*.image1 {*/
/* display:none;*/
/*  width: 100%;*/
/*  height: auto;*/
/*}*/

/*.overlay1 {*/
/*  position: absolute;*/

/*  top: 0;*/
/*  bottom: 0;*/
/*  left: 0;*/
/*  right: 0;*/
/*  height: 90%;*/
/*  width: 90%;*/
/*  opacity: 0;*/
/*  transition: .9s ease;*/
/*  background-color: transparent;*/
/*}*/

/*.container1:hover .overlay1 {*/
/*  opacity: 1;*/
/*}*/

/*.text1 {*/
/*  position: absolute;*/
/* width: 80%;*/
/*  height: auto;*/
/*  top: 60%;*/
/*  left: -105%;*/

/*  text-align: center;*/

/*}*/
/*  .container2 {*/
/*  position: relative;*/
/*  top:33.3%;*/
/*  left:40.3%;*/
/*  width: 11.9%;*/
/*  height:auto;*/
/*}*/

/*.image2 {*/
/* display:none;*/
/*  width:100%;*/
/*  height: auto;*/
/*}*/

/*.overlay2 {*/
/*  position: absolute;*/
/*  top: 0;*/
/*  bottom: 0;*/
/*  left: 0;*/
/*  right: 0;*/
/*  height: 90%;*/
/*  width: 90%;*/
/*  opacity: 0;*/
/*  transition: .9s ease;*/
/*  background-color: transparent;*/
/*}*/

/*.container2:hover .overlay2 {*/
/*  opacity: 1;*/
/*}*/

/*.text2 {*/
/*  position: absolute;*/
/* width: 80%;*/
/*  height: auto;*/
/*  top: 60%;*/
/*  left: -105%;*/

/*  text-align: center;*/

/*}*/
/* .container3 {*/
/*  position: relative;*/
/*  top:32.7%;*/
/*  left:47.9%;*/
/*  width: 10.6%;*/
/*  height:auto;*/
/*}*/

/*.image3 {*/
/* display:none;*/
/*  width:100%;*/
/*  height: auto;*/
/*}*/

/*.overlay3 {*/
/*  position: absolute;*/
/*  top: 0;*/
/*  bottom: 0;*/
/*  left: 0;*/
/*  right: 0;*/
/*  height: 90%;*/
/*  width: 90%;*/
/*  opacity: 0;*/
/*  transition: .9s ease;*/
/*  background-color: transparent;*/
/*}*/

/*.container3:hover .overlay3 {*/
/*  opacity: 1;*/
/*}*/

/*.text3 {*/
/*  position: absolute;*/
/* width: 80%;*/
/*  height: auto;*/
/*  top: 60%;*/
/*  left: -105%;*/

/*  text-align: center;*/

/*}*/

/*.container4 {*/
/*    position:relative;*/
/* top:33.8%;*/
/*  left:55.6%;*/
/*  width: 10.5%;*/
/*  height:auto;*/
/*}*/

/*.image4 {*/
/* display:none;*/
/*  width: 100%;*/
/*  height: auto;*/
/*}*/

/*.overlay4 {*/
/*  position: absolute;*/

/*  top: 0;*/
/*  bottom: 0;*/
/*  left: 0;*/
/*  right: 0;*/
/*  height: 90%;*/
/*  width: 90%;*/
/*  opacity: 0;*/
/*  transition: .9s ease;*/
/*  background-color: transparent;*/
/*}*/

/*.container4:hover .overlay4 {*/
/*  opacity: 1;*/
/*}*/

/*.text4 {*/
/*  position: absolute;*/
/* width: 80%;*/
/*  height: auto;*/
/*  top: 60%;*/
/*  left: -105%;*/

/*  text-align: center;*/
/*}*/
/*.container5 {*/
/*  position: relative;*/
/*  top:31%;*/
/*  left:27.4%;*/
/*  width: 20%;*/
/*  height:auto;*/
/*}*/

/*.image5 {*/
/* display:none;*/
/*  width: 100%;*/
/*  height: auto;*/
/*}*/

/*.overlay5 {*/
/*  position: absolute;*/

/*  top: 0;*/
/*  bottom: 0;*/
/*  left: 0;*/
/*  right: 0;*/
/*  height: 90%;*/
/*  width: 90%;*/
/*  opacity: 0;*/
/*  transition: .9s ease;*/
/*  background-color: transparent;*/
/*}*/

/*.container5:hover .overlay5 {*/
/*  opacity: 1;*/
/*}*/

/*.text5 {*/
/*  position: absolute;*/
/* width: 80%;*/
/*  height: auto;*/
/*  top: 60%;*/
/*  left: -105%;*/

/*  text-align: center;*/
/*}*/
.container6 {
  position: relative;
  top:30.7%;
  left:72.5%;
  width: 76.5%;
  height:-10%;


}


.image6 {
 display:none;
  width: 100%;
  height: auto;
}

.overlay6 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 90%;
  width: 90%;
  opacity: 0;
  transition: .9s ease;
  background-color: transparent;
}

.container6:hover .overlay6 {
  opacity: 1;
}


.text6 {
  position: absolute;
 width: 80%;
  height: auto%;
  top: 60%;
  left: -105%;
 overflow:auto;
  text-align: center;

}

html::-webkit-scrollbar {
  display: none;
  overflow:hidden;
}
html{
    overflow:hidden;
    width:100vh;
    height:100vh;
}


#error{
    position: absolute;

    padding:5px;
    border-radius:5px;
    color:white;
    margin-top:5px;
    position:center;
    left:30%;
}



}
</style>










    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="./assets/logo.png">
    <link rel="stylesheet" href="./css/style1.css">
    <!---we had linked our css file----->
    <script>
var pStart = { x: 0, y: 0 };
var pStop = { x: 0, y: 0 };
function swipeStart(e) {
 if (typeof e["targetTouches"] !== "undefined") {
   var touch = e.targetTouches[0];
   pStart.x = touch.screenX;
   pStart.y = touch.screenY;
 } else {
   pStart.x = e.screenX;
   pStart.y = e.screenY;
 }
}
function swipeEnd(e) {
 if (typeof e["changedTouches"] !== "undefined") {
   var touch = e.changedTouches[0];
   pStop.x = touch.screenX;
   pStop.y = touch.screenY;
 } else {
   pStop.x = e.screenX;
   pStop.y = e.screenY;
 }
 swipeCheck();
}
function swipeCheck() {
 var changeY = pStart.y - pStop.y;
 var changeX = pStart.x - pStop.x;
 if (isPullDown(changeY, changeX)) {
     window.location.href ="loginpage.php";
 }
}
function isPullDown(dY, dX) {
 // methods of checking slope, length, direction of line created by swipe action
 return (
   dY < 0 &&
   ((Math.abs(dX) <= 100 && Math.abs(dY) >= 300) ||
     (Math.abs(dX) / Math.abs(dY) <= 0.3 && dY >= 60))
 );
}
document.addEventListener(
 "touchstart",
 function (e) {
   swipeStart(e);
 },
 false
);
document.addEventListener(
 "touchend",
 function (e) {
   swipeEnd(e);
 },
 false
);
   </script>
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
              <!-- <header class="th">
                <h1 class="name">Barangay Luna Information System</h1>
              </header> -->
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='./main/officials.php' >Officials</a></li>
                    <li><a href='./main/residents.php' >Residents</a></li>
                    <li><a href='./main/about.php' >About</a></li>
                </ul>
            </nav>
        </div>






<!--<div class="container">-->
<!--  <img src="./assets/i.png" alt="Avatar" class="image">-->
<!--  <div class="overlay">-->
<!--    <img src="./assets/i.png" alt="Avatar" class="text">-->
<!--  </div>-->
<!--</div>-->
<!--       <div class="container1">-->
<!--  <img src="./assets/l.png" alt="Avatar" class="image1">-->
<!--  <div class="overlay1">-->
<!--    <img src="./assets/l.png" alt="Avatar" class="text1">-->
<!--  </div>-->
<!--</div> -->

<!--      <div class="container2">-->
<!--  <img src="./assets/u.png" alt="Avatar" class="image2">-->
<!--  <div class="overlay2">-->
<!--    <img src="./assets/u.png" alt="Avatar" class="text2">-->
<!--  </div>-->
<!--</div> -->

<!--  <div class="container3">-->
<!--  <img src="./assets/n.png" alt="Avatar" class="image3">-->
<!--  <div class="overlay3">-->
<!--    <img src="./assets/n.png" alt="Avatar" class="text3">-->
<!--  </div>-->
<!--</div> -->

<!-- <div class="container4">-->
<!--  <img src="./assets/a.png" alt="Avatar" class="image4">-->
<!--  <div class="overlay4">-->
<!--    <img src="./assets/a.png" alt="Avatar" class="text4">-->
<!--  </div>-->
<!--</div> -->

<!-- <div class="container5">-->
<!--  <img src="./assets/heart.png" alt="Avatar" class="image5">-->
<!--  <div class="overlay5">-->
<!--    <img src="./assets/heart.png" alt="Avatar" class="text5">-->
<!--  </div>-->
<!--</div> -->

 <div class="container6">
  <img src="./assets/all.png" alt="Avatar" class="image6">
  <div class="overlay6">
    <img src="./assets/all.png" alt="Avatar" class="text6">
  </div>
</div>






        <div id='login-form'class='login-page'>
            <div class="form-box" id="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>User</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Admin</button>
                </div>

                <form id='login' class='input-group-login'  role="form" method="post" autocomplete="off" >
        <img src="./assets/logo.png" width="70" class="pic">
                    <input type='text'class='input-field'placeholder='Enter Username' name="txt_username" required >
		    <input type='password'class='input-field'placeholder='Enter Password' name="txt_password" id="myInput" required>
		    <input type='checkbox'class='check-box' onclick="myFunctionpass()"><span class="checkbox">Show Password</span>
		    <button type='submit'class='submit-btn' name="btn_login">Log in</button>
        <label id="error" class="label label-danger pull-right"></label>
		 </form>
		 <form id='register' class='input-group-register' role="form" method="post" autocomplete="off" >
        <img src="./assets/logo.png" width="70" class="pic">
		     <input type='text'class='input-field'placeholder='Enter Username' name="txt_username" required>
		     <input type='password'class='input-field'placeholder='Enter Password'  name="txt_password" id="myInput1" required>
		     <input type='checkbox'class='check-box' onclick="myFunctionpass1()"><span>Show Password</span>
                    <button type='submit'class='submit-btn' name="btn_login">Log in</button>
                    <label id="error" class="label label-danger pull-right"></label>
	         </form>
            </div>
        </div>
    </div>


    <?php
      include "./connection/connection.php";
      if(isset($_POST['btn_login']))
      {
          $username = $_POST['txt_username'];
          $password = $_POST['txt_password'];


          $admin = mysqli_query($con, "SELECT * from tbluser where username = '$username' and password = '$password' and type = 'administrator' ");
          $numrow_admin = mysqli_num_rows($admin);

          $zone = mysqli_query($con, "SELECT * from tblzone where username = '$username' and password = '$password'");
          $numrow_zone = mysqli_num_rows($zone);

          $staff = mysqli_query($con, "SELECT * from tblstaff where username = '$username' and password = '$password' ");
          $numrow_staff = mysqli_num_rows($staff);

          $user = mysqli_query($con, "SELECT * from tblresident where username = '$username' and password = '$password' ");
          $numrow_user = mysqli_num_rows($user);



          if($numrow_admin > 0)
          {
              while($row = mysqli_fetch_array($admin)){
                $_SESSION['role'] = "Administrator";
                $_SESSION['userid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
              }
              header ('location: pages/dashboard/dashboard.php');
          }
          elseif($numrow_zone > 0)
          {
              while($row = mysqli_fetch_array($zone)){
                $_SESSION['role'] = "Zone Leader";
                $_SESSION['userid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
              }
              header ('location: pages/permit/permit.php');
          }
          elseif($numrow_staff > 0)
          {
              while($row = mysqli_fetch_array($staff)){
                $_SESSION['role'] = $row['name'];
                $_SESSION['staff'] = "Staff";
                $_SESSION['userid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
              }
              header ('location: pages/resident/resident.php');
          }
          elseif($numrow_user > 0)
          {
              while($row = mysqli_fetch_array($user)){
                $_SESSION['role'] = $row['fname'];
                $_SESSION['resident'] = 1;
                $_SESSION['userid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
              }
              header ('location: ./pages/clearance/clearance.php');
          }
          else
          {
            echo '<script type="text/javascript">document.getElementById("error").innerHTML = "Invalid Account";</script>';

          }

      }

    ?>





    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			// x.style.left='-400px';
			// y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			// x.style.left='50px';
			// y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event)
        {
            if (event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script>
    <script type="text/javascript">
    function myFunctionpass() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
    }
    </script>
    <script type="text/javascript">
    function myFunctionpass1() {
    var x = document.getElementById("myInput1");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
    }
    </script>
</body>
</html>
