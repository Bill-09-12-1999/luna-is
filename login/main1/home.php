<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barangay Luna Information System</title>
    <link rel="stylesheet" href="../css/style1.css">
    <!---we had linked our css file----->
</head>

<style media="screen">
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
@media only screen and (max-width: 600px) {
.container6{
  display: none;

}

.navbar{
  display: flex;
}
.title{
  position: relative;
  align-items: center;
  text-align: center;
  justify-content: center;
  font-size: 50px;
}


nav{
margin-top: 100%;
margin-left: auto;
  position: absolute;
  align-items: center;
  text-align: center;
  justify-content: center;
}

nav ul{
  position: absolute;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;

}

#MenuItems{
  flex-direction: column;
  margin-left: 20%;
  margin-right: 20%;
  position: relative;
  align-items: center;
  text-align: center;
  justify-content: center;
  font-size: 50px;
}
.form-box{
  max-width: 400px;
  max-height: 200px;
  background: white;
}
#ad {
  display: block ruby;
  position: absolute;
  margin-top: 25px;
  margin-left: 85px;
}
#us {
  display: block ruby;
  position: absolute;
  margin-top: 75px;
  margin-left: 95px;
}

}
</style>
<body>

    <div class="full-page">
        <div class="navbar">
            <div id="title">
                <a href='home.php'>Barangay Luna Information System</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='../main/officials.php'>Officials</a></li>
                    <li><a href='../main/residents.php'>Residents</a></li>
                    <li><a href='../main/about.php'>About</a></li>
                    <!-- <li><a href='#'>Contact</a></li> -->
                    <li><button class='loginbtn' onclick="document.getElementById('form-box').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
        </div>

        <div class="container6">
         <img src="../assets/all.png" alt="Avatar" class="image6">
         <div class="overlay6">
           <img src="../assets/all.png" alt="Avatar" class="text6">
         </div>
        </div>

        <!-- <div id='login-form'class='login-page'> -->
            <div id="form-box" class="form-box">

                <img src="../assets/logo.png" width="70" class="pic">
                <a id="ad"href="../login.php">Sign in as admin</a><br>
                  <a id="us"href="../pages/resident/login.php">Sign in as user</a>
            </div>
        <!-- </div> -->
    </div>
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('form-box');

        window.onclick = function(event)
        {
            if (event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script>
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll(".form-box"),{
		max: 20,
		speed: 400,
    glare: true,
    "max-glare": 1,
	});
    </script>
</body>
</html>
