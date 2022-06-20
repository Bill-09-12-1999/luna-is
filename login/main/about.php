<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <style>.disclaimer{
    display:none;
}










</style>
  </head>
  <body>
    <section id="one" style="background:#FDEED5">
    <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
<div class="slide first">

    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image1 WHERE tbl_image_id = 1");
while($row = mysqli_fetch_array($squery))
echo'
  <img src="../pages/feed/uploads/'.$row['image_location'].'" alt="">
  '; ?>
</div>


<div class="slide">
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image1 WHERE tbl_image_id = 2");
while($row = mysqli_fetch_array($squery))
echo'
  <img src="../pages/feed/uploads/'.$row['image_location'].'" alt="">
  '; ?>
  <!--<img src="2.png" alt="">-->
</div>
<div class="slide">
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image1 WHERE tbl_image_id = 3");
while($row = mysqli_fetch_array($squery))
echo'
  <img src="../pages/feed/uploads/'.$row['image_location'].'" alt="">
  '; ?>
  <!--<img src="1.png" alt="">-->
</div>
<div class="slide">
    <?php
include "../connection/connection.php";
$squery = mysqli_query($con, "SELECT * FROM tbl_image1 WHERE tbl_image_id = 4");
while($row = mysqli_fetch_array($squery))
echo'
  <img src="../pages/feed/uploads/'.$row['image_location'].'" alt="">
  '; ?>
  <!--<img src="2.png" alt="">-->
</div>

<div class="navigation-auto">
  <div class="auto-btn1"> </div>
    <div class="auto-btn2"> </div>
      <div class="auto-btn3"> </div>
        <div class="auto-btn4"> </div>
</div>



      </div>
<div class="navigation-manual">
  <label for="radio1"class="manual-btn"></label>
  <label for="radio2"class="manual-btn"></label>
  <label for="radio3"class="manual-btn"></label>
  <label for="radio4"class="manual-btn"></label>

</div>





    </div>

    </section>
    <section id="two">

<div class="mission">
         <!--<img src="scroll.png" width="15%" style=" background-position: right top ">-->

  <h1 style="font-size:35px; margin-left:10%;margin-right:10%;">Mission</h1>
  <p style="text-indent: 30px;font-size:30px; margin-left:10%;margin-right:10%;">Work in partnership with is citizenry to deliver exceptional, effective, fiscally responsible and
  gender responsive services while preserving and protecting the environment enhancing
  a high standard of community living.</p>

      <img src="scroll.png" width="15%" style="position:absolute; background-position: right bottom ">


</div>

    </section>

    <section id="three"  style="background:#FDEED5">
      <div class="vission">
        <h1 style="font-size:35px; margin-left:10%;margin-right:10%;">Vission</h1>
        <p style="text-indent: 30px;font-size:30px; margin-left:10%;margin-right:10%;">Envisions of a good life where barangay people live in progress and peace,
        harmony with the environment, government by trustworthy,
        goal-oriented and God fearing people. </p>
        <img src="scroll.png" width="15%" style="position:absolute; background-position: right bottom ">
      </div>


    </section>
    <section id="four">
      <div class="">

        <h2 style="font-size:35px; margin-left:10%;margin-right:10%;">About the project</h2>
        <p style="text-indent: 30px;font-size:30px; margin-left:10%;margin-right:10%;">The created Barangay information system serves as a requirement for our On-the-Job Training.
        We are chosen to have an On-the-Job Training to our respective barangay because we are unable to go outside the province
      or to any establishments inside our province because of the covid-19. The main aim of creating this project is to
        build a fully functioning profiling system within the given time (480 hours).</p>

        <img src="scroll.png" width="15%" style="position:absolute; background-position: right bottom ">
      </div>

    </section>


    <section id="five" style="background:linear-gradient(black,#333333)">
<div class="sfive">


<div class="card">
  <div class="imgbox">
    <img src="2.png" alt="">
    <img src="1.jpg" alt="">
  </div>

  <div class="details">
    <div class="content">
      <h1>Bill  Q. Alisdan<br> <span>Student</span></h1>

      <div class="dev" style="position:relative; align:center; justify-content:start;">
        <!-- <h1>Developer</h1><br><br><br> -->

      <p style="font-size:14px; position:relative; left:-100px;">Just a few things about yours truly,</p>
      <p style="text-indent: 30px; position:relative; left:-100px; margin-left:5px;">My name is Bill, a Networking student at Ilocos Sur Polytechnic State College. I live in Luna, Burgos, Ilocos Sur.
      Some of my favorite things to do are to draw, paint, listen to music, and play mobile games.<br></p>
      <p style="text-indent: 30px;position:relative; left:-100px; margin-left:5px;">I'am also a part-time illustrator at ecEmedia corporation and some of my works are: "Angalo
       and Aran" and "The Sea Otter" by Orlino C. and Estrella C. Baldonado.</p><br>

      </div>
      Contact:<br>
      <div class="icons">
        <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNrcxBdxVFxtvGmDspWTgPPmwLdpfpngxMldTXGKhXNhxcZrtVLlblDncwDVRtBRFCLxvB"><img src="gmail.png" width="50px"alt=""></a>
        <a href="http://m.me/billquisisem.alisdan"><img src="messenger.png" width="50px"alt=""></a>
      </div>
    </div>

  </div>

</div>




</div>
<p style="width:20px; color:lightgreen">🢀🢀🢀</p>
    </section>


    <nav>
        <a href="../main1/home.php">Home</a>
      <a href="#one">⭕</a>
        <a href="#two">Mission</a>
          <a href="#three">Vission</a>
            <a href="#four">About</a>
              <a href="#five">Developer</a>
    </nav>



    <script type="text/javascript">
      var counter = 1;
      setInterval(function(){
        document.getElementById('radio' + counter).checked=true;
        counter++;
        if(counter > 4){
          counter= 1;
        }
      },5000);
    </script>


  </body>
</html>
