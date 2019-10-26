<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: linear-gradient(rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.6)), url(Forest-Bridge.png);
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.button{
  font-family: Century Gothic;
  color: #fff;
  position: absolute;
  top: 73%;
  left: 50%;
  transform: translate(-50%,-50%);
}
.btn{
  border: 1px solid #fff;
  padding: 10px 30px;
  color: #fff;
  text-decoration: none;
  transition: 0.6s ease;
  border-radius: 3px;
}
.btn:hover{
  background-color: #fff;
  color: #000;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p>Logo Processing...</p>
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <h2> The _iNNoVatIoN_bEAstS </h2>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <div class="bottomleft">
    <p>Loading.....</p>
  </div>
<br>
<br>

</div>
<div class="button">
<a href="index.php" class="btn">HOME</a>
<a href="register.php" class="btn">REGISTRATION</a>
</div>

<script>

var countDownDate = new Date("Aug 15, 2019 00:00:00").getTime();


var countdownfunction = setInterval(function() {


  var now = new Date().getTime();


  var distance = countDownDate - now;


  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";


  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

</body>
</html>
