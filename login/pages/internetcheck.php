<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  *,*:after,*:before{
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
-ms-box-sizing: border-box;
box-sizing: border-box;
}
body{
font-family: arial;
font-size: 14px;
margin: 0;
background-image:rgba(0.0.0.0.5);
color: #000;
}

#internet_check_popup{
position: fixed;
left: 50%;
top: 50%;
transform: translate(-50%,-50%);
padding: 30px;
border-radius: 15px;
background-image: linear-gradient(45deg,#194A40,#4D7850);
box-shadow: 0 0 20px rgba(0,0,0,0.4);
text-align: center;
width: 310px !important;;
display: none;
background-image:rgba(0.0.0.0.5);
}
#internet_check_popup.online,
#internet_check_popup.offline{
  color: #EFB34C;
display: block !important;

}
#internet_check_popup.online{
/*background-color: #05d364;
box-shadow: 0 0 15px #05d364;*/
color: #EFB34C;
background-image: linear-gradient(45deg,#194A40,#4D7850);
}


  </style>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="internet_check_popup">
	<h3 id="popup_heading"></h3>
	<p id="popup_paragraph">Please Connect to your Internet</p>
</div>

<!-- <script type="text/javascript" src="js/script.js"></script>   -->



<script type="text/javascript">
(function () {
function isOffline() {
  popup_heading.innerHTML="Awan Internet mo Kabsat 😄";
  popup_paragraph.innerHTML="You're offline. Check your connection.";
  internet_check_popup.className = "offline";
};
function isOnline() {
  popup_heading.innerHTML="Back to Online";
  popup_paragraph.innerHTML="You're Online";
  internet_check_popup.className = "online";
  setTimeout(function(){
    internet_check_popup.classList.remove("online");
  },2000)
}

window.addEventListener("offline", isOffline, false);
window.addEventListener("online", isOnline, false);

})();



</script>

</body>
</html>
