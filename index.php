<!DOCTYPE html>
<head>
  <title>E-form</title>
</head>

<style type="text/css">
#container{background-color:#3d3a12;width:800px;height:600px;margin:0 auto;position:relative;}
#box1{background-color:#d3f6a2;width:100%;height:50px;}
#box2{background-color:#4dae34;width:90%;margin-left:4%;padding:1%;}
#formNo{float:right;margin: 5px 5px 0 -50px;} /* Work with -50px only */

#camera{background-color:#4da334;width:250px;height:218px;float:right;border: 6px #333 solid;}
#videoElement{width:250px;height:250px;margin-top: -31px;margin-bottom: -35px;}
#camButton{width:250px;height:30px;}
#copyright{background-color:#f4f4f4;height:0 auto;width:100%;position:fixed;left:0;bottom:0;right:0;box-shadow:0px -5px 15px #363636;}

</style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
window.onload=function(){

var video = document.querySelector("#videoElement");

navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;

if (navigator.getUserMedia) {
    navigator.getUserMedia({video: true}, handleVideo, videoError);
}

function handleVideo(stream) {
    video.src = window.URL.createObjectURL(stream);
}

function videoError(e) {
    alert("No webcam");
}
}

</script>

<body>
  <div id="container">
    <div id="box1"> <!--title-->
      <div id="formNo">Form no:</div>
      <p align="center"><font size="10px">E-Form</font></p>
    </div>
    <div id="box2"> <!--form-->
      <div id="camera">
        <video autoplay="true" id="videoElement">
        </video>
        <button id="camButton">Capture</button>
      </div>
      <form name="form" method="post" action="process.php" >
        <table>
        <tr>
        <td>Name:</td><td><input name="SFN" type="text" value="First Name"/><input name="SLN" type="text" value="Last name"/></td>
        </tr>
        <tr>
        <td>Mobile:</td><td><input name="MOBILE" type="number" value="XXX-XX-XXXXX"/></td>
      </tr>
      <tr>
        <td>Class:</td><td><input name="CLASS" type="number" value="5"/></td>
      </tr>
      <tr>
        <td>Parents</td>
      </tr>
      <tr>
        <td>Father's Name:</td><td><input name="FFN" type="text" value="First Name"/><input name="FLN" type="text" value="Last Name"/></td>
      </tr>
      <tr>
        <td>Occupation:</td><td><input name="FOCP" type="text" value="Occupation"/></td>
      </tr>
      <tr>
        <td>Mother's Name:</td><td><input name="MFN" type="text" value="First Name"/><input name="MLN" type="text" value="Last Name"/></td>
      </tr>
      <tr>
        <td>Occupation:</td><td><input name="MOCP" type="text" value="Occupation"/></td>
      </tr>
      <tr>
        <td>Address:</td><td><input name="SADDR" type="area" value="Full address"/></td>
      </tr>
        </address>
      <tr>
        <td><input type="submit"/></td>
      </tr>
    </table></form>
    </div>
    <div id="copyright">
      <span style="color:#800000;float:left;margin:5px;margin-top:10px;margin-left:10px;">Copyright &copy; 2014 ALL RIGHTS RESERVED</span>
      <span style="color:#800000;float:right;margin:5px;margin-top:10px;margin-left:10px;">Developed By:- Projectro.com</span>
    </div>
  </div>

</body>
</html>
